<?php

//*****************
// This script created and maintained by Andrew Edwards
// CB01.20.19 Phone: x2843
// For: UTS: Safety and Wellbeing
//*****************

// Start image file and place text and labels
ini_set("memory_limit","256M");
$a4 = imagecreatetruecolor(3508, 2480);

$white = imagecolorallocate($a4, 255, 255, 255);
$red = imagecolorallocate($a4, 255, 0, 0);
$black = imagecolorallocate($a4, 0, 0, 0);
$font = 'ARIAL.TTF';
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

// name 
$subst = $_POST['subst'];
$textArray = explode('|', wordwrap($subst,50,'|',true));
$substy = 175;
foreach ($textArray as $txt)	{
	imagettftext($a4, 100, 0, 175, $substy,  $black, $font, $txt);
	$substy += 175;
}

// signal word
$signl = $_POST['signl'];
imagettftext($a4, 100, 0, 175, 930,  $black, $font, $signl);

// risks
$risktmp = $_POST['risks'];
$risks = explode("\n", $risktmp);
$riskx = 175;
$risky = 1105;
foreach($risks as $risk) {
	$textArray = explode('|', wordwrap($risk,36,'|'));
	foreach ($textArray as $txt)	{
		imagettftext($a4, 70, 0, $riskx, $risky,  $black, $font, $txt);
		$risky += 90;
		//if ($risky >= 2135)	{	$riskx = 1750; $risky = 1725;	}	else	{	$risky += 65;	}
	}
	
}

// safety
$safetytmp = $_POST['safety'];
$safetys = explode("\n", $safetytmp);
$safetyx = 1750;
$safetyy = 1105;
foreach($safetys as $safety) {
	$textArray = explode('|', wordwrap($safety,35,'|'));
	foreach ($textArray as $txt)	{
		imagettftext($a4, 70, 0, $safetyx, $safetyy,  $black, $font, $txt);
		$safetyy += 90;
		//if ($safetyy >= 2135)	{	$safetyx = 1750; $safetyy = 1725;	}	else	{	$safetyy += 65;	}
	}
	
}


imagettftext($a4, 60, 0, 700, 2400,  $black, $font, "Refer to the Safety Data Sheet for more information.");

/*
// Create temp image file
header('Content-Type: image/gif');
imagegif($a4,NULL);
*/

// save tmp image
$filename = './tmp/'.date("YmdHis").'.gif';
imagegif($a4,$filename);	
	
// Output to pdf or screen based on selection
$output = $_POST['output'];
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
		preview($filename,"acchs");
		break;
}

//delete image instance then file

imagedestroy($a4);

?>