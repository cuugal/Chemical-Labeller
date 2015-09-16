<?php
//*****************
// This script created and maintained by Andrew Edwards
// CB01.20.19 Phone: x2843
// For: UTS: Safety and Wellbeing
//*****************
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Chemical Search Results</title>

<script language="JavaScript">
function getresult()
{
	//workaround code for single result (e.g. no array)
	if (document.acchs_results.result.length == null)
	{
		var name = document.acchs_results.name.value;
		var signal = document.acchs_results.signal.value;
		var risks = document.acchs_results.risks.value;
		var safety = document.acchs_results.safety.value;
	}	

	for (var i=0; i < document.acchs_results.result.length; i++)
	{
		if(document.acchs_results.result[i].checked)
		{
			//var row = document.acchs_results.result[i].value;
			var name = document.acchs_results.name[i].value;
			var signal = document.acchs_results.signal[i].value;
			var risks = document.acchs_results.risks[i].value;
			var safety = document.acchs_results.safety[i].value;
		}
	}
	window.opener.document.acchs_build.subst.value=name;
	window.opener.document.acchs_build.signl.value=name;
	window.opener.document.acchs_build.signl.value=signal;
	window.opener.document.acchs_build.risks.value=risks;
	window.opener.document.acchs_build.safety.value=safety;
	//self.opener.acchs_build.safety.value=safety;
	window.close();
}
</script>

</head>
<body>
<?php

	//init chemical list excelsheet
	require_once './lib/reader.php';
	$chemlist = new Spreadsheet_Excel_Reader();
	$chemlist->setOutputEncoding('CP1251');
	$chemlist->read('./data/HSIS_extract.xls');
	
	//init phrases excelsheet
	$phraselist = new Spreadsheet_Excel_Reader();
	$phraselist->setOutputEncoding('CP1251');
	$phraselist->read('./data/RandS_phrases_from_ACCHS_v21-05-2012.xls');
	
	//columns
	$SubstanceName = 2;
	$CasNo = 1;
	$Classification = 5;

	$srchname = $_GET['name'];
	$srchnumb = $_GET['numb'];
	
	echo '<div id="srchbody">';
	
	if ($srchname == "" && $srchnumb == "")
	{
		echo '<p>You must enter either a chemical name or number</p>';
		echo '<p><a href="#" onclick="window.close(); return false">CLOSE WINDOW</a></p>'; 	
	}	
	else	
	{
				
		//search spreadsheet
		$foundrows = array();
		
		for ($i = 2; $i <= $chemlist->sheets[0]['numRows']; $i++) {
			if ($srchnumb == "")	
			{
				//search name
				$offset = $SubstanceName;
				$needle = $srchname;	
			}	else	{		
				//search number
				$offset = $CasNo;
				$needle = $srchnumb;				
			}
						
			if (isset($chemlist->sheets[0]['cells'][$i][$offset])){
				$haystack = $chemlist->sheets[0]['cells'][$i][$offset];
				if (stripos($haystack, $needle) !== false )	{
								$foundrows[] = $i;
				}
			}
			
		}
		
		//display results
		
		//print_r($foundrows);
		echo '<form name="acchs_results" >';
		
		foreach($foundrows as $row) {
			
			//initialise
			$signalstr = $riskstr = $safetystr = "";
			unset ($chemstr, $classify, $pieces, $signaltmp, $risktmp, $safetytmp);
			
			$chemstr = $chemlist->sheets[0]['cells'][$row][$SubstanceName];
			
			if (isset($chemlist->sheets[0]['cells'][$row][$Classification])){
				$classify = $chemlist->sheets[0]['cells'][$row][$Classification];
			}	else	{
				//Dummy classification string with nothing set if cell is blank, but will not error
				$classify = "::";
			}
			
			//split classification into the three types
			
			//break string into three types
			//echo $classify;
			$rmchar = array("R", "S", " ", ",");
			$classify = str_replace($rmchar, "", $classify);
			$pieces = explode(":", $classify);
			
			//spit each into components
			//print_r($pieces);
			$signaltmp = explode(";", $pieces[0]);
			$risktmp = explode("-", $pieces[1]);
			
			//Some classification cells are not properly formatted with R: and S:, or it is missing one of the components. Need elicitation. There is a current workaround:
			
			if (isset($pieces[2]))
			{
				$safetytmp = explode("-", $pieces[2]);
			}	else	{
				$safetytmp[] = "";
				echo "<p><b>Verify chemical below with HSIS database before printing: </b></p>";
			}
			
			//convert to human readable
			foreach($signaltmp as $piece1) {
				for ($i = 2; $i <= $phraselist->sheets[0]['numRows']; $i++) {
					if ($piece1 == $phraselist->sheets[0]['cells'][$i][1])	{
						$signalstr .= $phraselist->sheets[0]['cells'][$i][2];
						$signalstr .= "; ";
					}
				}
			}
			$signalstr = rtrim($signalstr, "; ");
			
			foreach($risktmp as $piece2) {
				for ($i = 13; $i <= $phraselist->sheets[1]['numRows']; $i++) {
					if ($piece2 == substr($phraselist->sheets[1]['cells'][$i][1], 1))	{
						$riskstr .= $phraselist->sheets[1]['cells'][$i][2];
						$riskstr .= "\n";
					}
				}
			}
			
			foreach($safetytmp as $piece3) {
				//remove notes and other non-important characters
				$piece3 = preg_replace("/[^0-9()\/]/", "", $piece3);
				//Search for code
				for ($i = 1; $i <= $phraselist->sheets[2]['numRows']; $i++) {
					if ($piece3 == substr($phraselist->sheets[2]['cells'][$i][1], 1))	{
						$safetystr .= $phraselist->sheets[2]['cells'][$i][2];
						$safetystr .= "\n";
					}
				}
			}
			
			//echo table form
			echo '<p><input type="radio" name="result" value="'.$row.'">'.$chemstr.'</p>';
			echo '<input type="hidden" name="name" value="'.htmlspecialchars($chemstr, ENT_COMPAT).'" />';
			echo '<input type="hidden" name="signal" value="'.$signalstr.'" />';
			echo '<input type="hidden" name="risks" value="'.$riskstr.'" />';
			echo '<input type="hidden" name="safety" value="'.$safetystr.'" />';
		}
		echo '</div>';
		echo '<div id="srchbar">';
		//heading
		echo '<b>Search term: </b><i>';
		if ($srchnumb == "")	{	echo $srchname;		}	else	{	echo $srchnumb;		}
		echo '</i>.<br />Select your chemical then press: ';
		echo '<input type="button" name="select" value="select" onclick="getresult(); return false;">';
		echo '</div>';
		echo '</form>';
	}


?>



</body>
</html>