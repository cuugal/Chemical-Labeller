<?php
//*****************
// This script created and maintained by Andrew Edwards
// CB01.20.19 Phone: x2843
// For: UTS: Safety and Wellbeing
//*****************

date_default_timezone_set('Australia/Sydney');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<!-- imported stylesheets-->

<style type="text/css">
#tablink-2 {
width: 130px;
}

#tab-nav ul li.tab-2 a:link#tablink-2, 
#tab-nav ul li.tab-2 a:visited#tablink-2
{
</style>

<!--This script is needed for the label creator -->
<script type="text/javascript">
function addtext(content)
{
    document.ghs_build.stmnt.value += content;
	document.ghs_build.stmnt.value += "\n";
	// The below line prevents the 'href' on the anchor to be followed.
    return false;
}
function showdiv(divnum)
{
    for (var $i = 0, $j = document.getElementById('collection').getElementsByTagName('div'); $i < $j.length; $i++) {
	$j[$i].style.display = 'none';	}
	document.getElementById(divnum).style.display='block'
}

function chkgrp(btn)  
{   
    var form_object = document.ghs_build;
	var checkbox_name = "picto[]";
	
	//max 5 checked
    var total=0; 
	
    for(var i=0; i < form_object[checkbox_name].length; i++) 
    { 
        if(form_object[checkbox_name][i].checked) 
        { 
            total++ ;
        }        
    }    
	if (total>5)
	{
		alert("You can only select a maximum of 5 checkboxes")
		btn.checked=false
	} 
	
	//mutually exclusive skull and exclamation
	if ((form_object[checkbox_name][5].checked)&&(form_object[checkbox_name][6].checked))
	{	
		alert("The skull & crossbones and the exclamation mark pictograms are mutually exclusive.")
		btn.checked=false
	}
	
}

</script>
</head>


<!-- this is for the hazard menus -->
<body onload="showdiv('grp0')" id="about">


<!-- Main Title -->
<div id="logo">
<img src="images/UTS_logo.png" alt="UTS" width="105" height="44" style="border: 1px; vertical-align:top; float:left;">
</div>

<div id="wrappertop">
	<div id="content">
	<br />
	<h1 class="pagetitle">Create a Hazardous Chemical Label</h1>
	<br />
	</div>
</div>

<!-- Main Column -->
<div id="main-column">


	<!-- Chemical Label Creator starts here -->
	<div id="clgtabs">
		<ul> 
			<li><a href="./ghs.php" class="active">GHS Label Creator</a></li> 
			<!-- section now deprecated li><a href="./acchs.php">ACCHS</a></li --> 
			<li><a href="./instructions.html">Instructions</a></li>
		</ul> 
	</div>


	<br />

	<div id="contentp">
	<h3>For Globally Harmonized System of Classification and Labelling of Chemicals (GHS)</h3>
	<p>You may search for a chemical below, subsequently modfy the details, or enter the details entirely manually.</p>
		
		<script language="JavaScript">
			function windowopener(){
			var x = document.ghs_search.srchname.value;
			var y = document.ghs_search.srchnumb.value;
			controlWindow=window.open("ghs_popup.php?name="+x+"&numb="+y,"","toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=640,height=480");
			}
		</script>
		<form name="ghs_search">
			Chemical name: <input type="text" size='30' name="srchname" />
			CAS Number: <input type="text" size='12' name="srchnumb" />
			<input type="button" name="subtsrch" value="Search" onclick="windowopener()"><br>
			Use an asterix (*) as a wildcard for chemical names.
		</form>
		<hr />
		<form name="ghs_build" action="ghs_create.php" method="post" target="_blank">
			<h3>1. Enter name of substance:</h3> 
			<!-- <input type="text" size='60' maxlength='255' name="subst" /> -->
			<textarea name="subst" rows="4" cols="60"></textarea>
			<h3>2. Select signal word:</h3>
			<input type="radio" name="signl" value=" " checked /> None
			<input type="radio" name="signl" value="DANGER" /> Danger
			<input type="radio" name="signl" value="WARNING" /> Warning
			<h3>3. Select hazard pictogram:</h3>
			<?php
			
				$file_handle = fopen("./data/GHS_pictograms.csv", "r");
				while (!feof($file_handle) ) 
				{
					$rowArr = fgetcsv($file_handle, 1024);
					if (substr( $rowArr[0], 0,3) === "GHS")	// sanity
					{
						echo "<table style='float: left; width:75px; white-space:pre; border: 0px solid black;'>
								<tr><td><img src='./img/ghs/gif/{$rowArr[1]}.gif' alt='{$rowArr[3]}' title='{$rowArr[2]}' height='70' width='70' align='top' /></td></tr>
								<tr><td><input type='checkbox' name='picto[]' value='{$rowArr[0]}' onclick='chkgrp(this)' /> {$rowArr[0]}</td></tr>
							  </table>";
					}
				}
				echo '<div style="margin: 130px;"></div>';	// Cannot use clear:both as it's expected result is interfered with by the menu skin added by S&WB
				fclose($file_handle);
			
			?>
			
			<h3>4. Select hazard statements by hovering over the category headings:</h3>
			<div id="collection"><h3>
				
				<?php
				require_once './lib/reader.php';
				$data = new Spreadsheet_Excel_Reader();
				$data->setOutputEncoding('CP1251');
				$data->read('./data/GHS_hazard_statements_22-05-2012.xls');
				
				//create the show/hide buttons for each 10-statement div with header word
				$divnum = 0;
				for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
					if ($i % 10 == 0 || $i==2) {	
					$tmp = $data->sheets[0]['cells'][$i][2];
					$arr = explode(' ',trim($tmp));
					$tmp = $arr[0];
					//$tmp = substr($tmp, 0, 6);
					?>
						<a href="#" onmouseover="showdiv('<?php echo "grp".$divnum; ?>')"><?php echo $tmp ?></a> |	
					<?php
					$divnum++;
					}
				}
				
				//create a new div for each 10 statements				
				echo '</h3><div id="grp0" style="height:15em;">';
				$divnum = 0;
				for ($i = 2; $i <= $data->sheets[0]['numRows']; $i++) {
					if ($i % 10 == 0) {	
						$divnum++;
						echo '</div><div id="grp'.$divnum.'" style="height:15em;">';	
					}
					$name = $data->sheets[0]['cells'][$i][2] . " (" . $data->sheets[0]['cells'][$i][1] . ")";
					$tmp = $data->sheets[0]['cells'][$i][2];
					?>
					<a onclick="addtext('<?php echo addslashes($tmp) ?>')"><?php echo $name ?></a><br />	<!-- As of HTML 5, href tag no longer needed and stops page jumping when clicked-->			
					<?php	
				}
				?>
				</div>
			</div>
			<h3>You can edit the hazard statements below, separated by a line-break (i.e. enter key):</h3>
			<textarea name="stmnt" rows="10" cols="60"></textarea>
			<h3>Add your own personal information in the fine print (optional):</h3>
			<h3><input type="text" name="fineprint" size="75" value="Additional information is listed in the Safety Data Sheet"></h3>		
			<h3>5: Go!</h3>
			<input type="radio" name="output" value="prev" checked /> Preview<br />
			<input type="radio" name="output" value="2lbl" /> 2 labels per A4 page (use Avery L7168 labels); PDF<br />
			<input type="radio" name="output" value="8lbl" onclick="document.ghs_build.layout.checked=true;"/> 8 labels per A4 page (use Avery L7165 labels); PDF<br />
			<input type='checkbox' name='layout' value='simple' /> Simple Layout (Doesn't print risk statements - Required for smaller 8 label output)<br /><br />
			<input type="submit" value="Submit" />
		</form>
	</div>
<!-- Chemical Label Creator ends here -->


</div>
</div>

</div>
</div>

<br />
&nbsp;
<br />


</body>
</html>