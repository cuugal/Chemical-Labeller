<?php

//*****************
// This script created and maintained by Andrew Edwards
// CB01.20.19 Phone: x2843
// For: UTS: Safety and Wellbeing
//*****************
date_default_timezone_set('Australia/Sydney');

// Start image file and place text and labels
ini_set("memory_limit","256M");
//$a4 = imagecreatetruecolor(3508, 2480);
$a4 = imagecreatetruecolor(4464, 2480);

$white = imagecolorallocate($a4, 255, 255, 255);
$red = imagecolorallocate($a4, 255, 0, 0);
$black = imagecolorallocate($a4, 0, 0, 0);
$font = __DIR__.'/ARIAL.TTF';
imagefill($a4, 0, 0, $white);

//border
$x = 0;
$y = 0;
$w = imagesx($a4) - 1;
$h = imagesy($a4) - 1;
imageline($a4, $x,$y,$x,$y+$h,$black);
imageline($a4, $x,$y,$x+$w,$y,$black);
imageline($a4, $x+$w,$y,$x+$w,$y+$h,$black);
imageline($a4, $x,$y+$h,$x+$w,$y+$h,$black);

// What output
$output = $_POST['output'];

// What type of label are we printing, detailed or simple layout.
if(isset($_POST['layout']) && $_POST['layout'] == "simple")
  $simpleLayout = 1;
else
  $simpleLayout = 0;
  

// name     was 180, 140, 110 
$subst = $_POST['subst'];
$subst = str_replace(array("\r", "\n"), '', $subst);	// strip newlines (they are already sperated by a semicolon anyway)
$len = strlen($subst);
if ($len <= 15)
	$nameSize = 280;
else if ($len <= 30)
	$nameSize = 200;
else 
	$nameSize = 160;
	
if ($simpleLayout)
	$substy = 370;
else
	$substy = 320;
// colour, size, angle, x displacement, y displacement,  ,  
imagettftext($a4, $nameSize, 0, 110, $substy,  $black, $font, $subst);


// pictograms was x360, y480
if (isset($_POST['picto']))	{
	
	if ($simpleLayout) {
		
		$pictox = 380;
		$pictoy = 500;
		$i=0;
		foreach($_POST['picto'] as $value) 
		{
			$temp = imagecreatefromgif('./img/ghs/gif/'.$value.'.gif');

			imagecolortransparent ( $temp, imagecolorclosest ( $temp,  255,255,255 ) );	// set transparent background
			imagecopyresampled($a4, $temp, $pictox, $pictoy, 0, 0, 900, 900, 720, 720);
			$pictox += 920;
			$i++;
			if ($i == 3)
			{
				$pictox = 820;
				$pictoy += 520;
			}
		}
		
	} else {
	
		$pictox = 150;
		foreach($_POST['picto'] as $value) {
			$temp = imagecreatefromgif('./img/ghs/gif/'.$value.'.gif');
			//imagecopy($a4, $temp, $pictox, $pictoy, 0, 0, 720, 720); 
			//imagecopyresized($a4, $temp, $pictox, 400, 0, 0, 600, 600, 720, 720);
			imagecopyresized($a4, $temp, $pictox, 400, 0, 0, 700, 700, 720, 720);

			//$pictox += 631;
			$pictox += 700;
		}
	}

}

// signal word
$signl = $_POST['signl'];
if ($simpleLayout) {
	imagettftext($a4, 260, 0, 1150, 2200,  $red, $font, $signl);
} else { 
	imagettftext($a4, 220, 0, 1150, 1350,  $red, $font, $signl);
}


// statements
if (!$simpleLayout) {
	$stmnt = $_POST['stmnt'];
	$stmnt = str_replace("\r", '', $stmnt);	// delete  carriage return
	$stmnt = str_replace("\n", '; ', $stmnt);	// Convert newlines to semicolons
	$stmntx = 175;
	$stmnty = 1625;
	$textArray = explode('|', wordwrap($stmnt,69,'|')); // width of text
	foreach ($textArray as $txt)	{
		imagettftext($a4, 100, 0, $stmntx, $stmnty,  $black, $font, $txt);  //font size
		$stmnty += 145; //line spaceing
	}
}

$fineprint = $_POST['fineprint'];
imagettftext($a4, 60, 0, 175, 2400,  $black, $font, $fineprint);
// Create temp image file

//header('Content-Type: image/gif');
//imagegif($a4,NULL);

$filename = './tmp/'.date("YmdHis").'.gif';
imagegif($a4,$filename);	

	
// Output to pdf or screen based on selection
switch ($output) {
	case "2lbl":
		require './pdf.php';
		pdf($filename,2);
		break;
	case "8lbl":
		require './pdf.php';
		pdf($filename,8);
		break;
	case "prev":
	default:
		require './preview.php';
		preview($filename,"ghs");
		break;
}

imagedestroy($a4);

?>