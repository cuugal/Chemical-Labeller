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
<link rel="stylesheet" type="text/css" href="http://www.uts.edu.au/css/generic/stylesheet.css" />
<link rel="stylesheet" type="text/css" href="http://www.uts.edu.au/css/generic/site-template.css" />
<link rel="stylesheet" type="text/css" media="print" href="http://www.uts.edu.au/css/generic/print.css" />
<link rel="stylesheet" type="text/css" href="http://www.safetyandwellbeing.uts.edu.au/css/override.css" />

<!--[if lt IE 7]>   <link rel="stylesheet" type="text/css" href="http://www.uts.edu.au/css/generic/ie6.css" /><![endif]-->

<style type="text/css">
#tablink-2 {
width: 130px;
}

#tab-nav ul li.tab-2 a:link#tablink-2, 
#tab-nav ul li.tab-2 a:visited#tablink-2
{
color: #fff; 
border: none; 
background: none; 
padding: 2px 0 7px 0;
background: #09c url(http://www.uts.edu.au/images/css/tabs_active_corner2.gif) top right no-repeat;
border-left: 1px solid #fff;
}

#tab-nav ul li#group-1,
#tab-nav ul li#group-2,
#tab-nav ul li#group-3,
#tab-nav ul li#group-4
{display: none;}

#tab-nav ul li#group-2
{display: block;}

#contentp {border: solid 1px #5A8033; padding-top: 5px; padding-bottom: 10px; padding-left: 10px; margin-top:9px; font-size: 0.75em; width: 98%;}
#contentp img {border: none;}

</style>


<!-- end of imported stylesheets-->


<!-- imported scripts -->
<script src="http://datasearch2.uts.edu.au/common-assets/js/jquery.js" type="text/javascript"></script>
<script src="http://datasearch2.uts.edu.au/common-assets/js/tabber.js" type="text/javascript"></script>
<script src="http://www.safetyandwellbeing.uts.edu.au/js/randomimage.js" type="text/javascript"></script>
<script src="http://www.safetyandwellbeing.uts.edu.au/js/utils.js" type="text/javascript"></script>
<!-- end of imported scripts -->


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

<!-- script from HRU template -->
<script type="text/javascript">
<!-- 
/* <![CDATA[ */
	if (typeof jQuery != 'undefined') {
		//set variables and get the data
		jQuery(document).ready(function(){
			//hide the template until it has been populated
			jQuery("#" + 'news-container').hide();
			var nePublicationId = '328';
			var neTemplate = 'news-container';
			var neNoRecordsText = 'No notices';
			var neHideIfEmpty = 'false';
			var neGetOnly = 'current';
			var neMaxRows= '5';
			var neTopFeatured = '2';
			var neStartRow = '1';
			var neSortBy = 'published';
			var neSortDirection = 'DESC';
			var neCategoryId = '';
			var neExcludeCategoryId = '';
			var neThemeId = '';
			var neSectionId = '';
			var neCampusId = '';
			var neBuildingId = '';
			var neAudienceId = '';
			var neCourseId = '';
			var neAddCategories = 'false';	
			var neSummaryWordLength = 'false';
			var callback = '';
			var randomNumber=Math.floor(Math.random()*1000);
			var neAttributes = '';
			if (neGetOnly.length) {neAttributes = neAttributes + '&GetOnly=' + neGetOnly;}
			if (neMaxRows.length) {neAttributes = neAttributes + '&MaxRows=' + neMaxRows;}
			if (neTopFeatured.length) {neAttributes = neAttributes + '&TopFeatured=' + neTopFeatured;}
			if (neStartRow.length) {neAttributes = neAttributes + '&StartRow=' + neStartRow;}
			if (neSortBy.length) {neAttributes = neAttributes + '&SortBy=' + neSortBy;}
			if (neSortDirection.length) {neAttributes = neAttributes + '&SortDirection=' + neSortDirection;}
			if (neCategoryId.length) {neAttributes = neAttributes + '&CategoryId=' + neCategoryId;}
			if (neExcludeCategoryId.length) {neAttributes = neAttributes + '&ExcludeCategoryId=' + neExcludeCategoryId;}
			if (neThemeId.length) {neAttributes = neAttributes + '&ThemeId=' + neThemeId;}
			if (neSectionId.length) {neAttributes = neAttributes + '&SectionId=' + neSectionId;}
			if (neCampusId.length) {neAttributes = neAttributes + '&CampusId=' + neCampusId;}
			if (neBuildingId.length) {neAttributes = neAttributes + '&BuildingId=' + neBuildingId;}
			if (neAudienceId.length) {neAttributes = neAttributes + '&AudienceId=' + neAudienceId;}
			if (neCourseId.length) {neAttributes = neAttributes + '&ItemCourseId=' + neCourseId;}
			if (neAddCategories.length) {neAttributes = neAttributes + '&AddCategories=' + neAddCategories;}
			if (neSummaryWordLength.length) {neAttributes = neAttributes + '&SummaryWordLength=' + neSummaryWordLength;}
			if (neHideIfEmpty.length) {neAttributes = neAttributes + '&HideIfEmpty=' + neHideIfEmpty;}
			if (callback.length) {neAttributes = neAttributes + '&callback=' + callback;}
			neAttributes = neAttributes + '&dataPrefix=' + randomNumber;
			//get data and display it
			jQuery.getScript("http://www.events.uts.edu.au/app/feedJquery.cfm?PublicationId=" + nePublicationId + neAttributes, function(){
				getData(neTemplate,neNoRecordsText,nePublicationId,randomNumber);
			});
		});
	}
	else {
		alert('No jQuery!');
	}
/* ]]> */
-->
</script>
</head>
<body onload="showdiv('grp0')" id="about">




<!-- Skip Links -->
<div id="skip-links">

<a href="#start-content">
<img src="http://www.uts.edu.au/images/css/skip.jpg" alt="Skip to content" width="0" height="0" />
</a>
<a href="#navigation">
<img src="http://www.uts.edu.au/images/css/skip.jpg" alt="Skip to navigation" width="0" height="0" />
</a>
<a href="http://www.uts.edu.au/accessibility.html">
<img src="http://www.uts.edu.au/images/css/skip.jpg" alt="Accessibility statement" width="0" height="0" />
</a>


<p class="hidden">
Using a modern browser that supports web standards ensures that the site's full visual experience is available.  Consider <a href="http://www.uts.edu.au/upgrade.html">upgrading your browser</a> if you are using an older technology.
</p>

</div>

<!-- Global Utility Bar (Banner) -->
<div id="global-utility-bar">
<!-- UTS Logo -->
<div id="uts-logo">
<a href="http://www.uts.edu.au"><img src="http://www.uts.edu.au/images/css/utslogo.gif" alt="University of Technology, Sydney homepage" width="132" height="30" /></a>
</div>

<!-- Main Title -->
<div class="hidden-title">
<p>University of Technology, Sydney</p>
</div>

<!-- Global Utility Bar Navigation -->
<div id="global-utility-bar-nav">
<a name="navigation"></a><!-- Skip to Navigation Anchor -->
<a href="http://email.itd.uts.edu.au/webapps/directory/byname/">Staff directory</a> | 
<a href="http://www.uts.edu.au/about/mapsdirections/">Campus maps</a> | 
<a href="http://newsroom.uts.edu.au/">Newsroom</a> | 
<a href="http://www.events.uts.edu.au/web/">What's on</a>
</div>



<!-- Search Form -->
<div id="global-utility-bar-search">
<form method="get" action="http://datasearch2.uts.edu.au/safety-wellbeing/search.cfm">
   <div>
      SEARCH
      &nbsp; <input type="radio" name="scope" value="site" checked="checked" id="search-this-site" /> <label for="search-this-site">this site</label>
      &nbsp; <input type="radio" name="scope" value="uts" id="search-all-UTS" /> <label for="search-all-UTS">UTS</label> &nbsp;
      <label for="input-text"></label><input type="text" name="q" size="14" maxlength="100" id="input-text" />
      <input type="submit" name="btnG" value="Go" />
   </div>
</form>
</div>
</div>

<!--Tab Navigation -->
<div id="tab-navigation-wrapper">
<div id="tab-navigation-leftside"><a href="http://www.safetyandwellbeing.uts.edu.au/"><img src="http://www.safetyandwellbeing.uts.edu.au/images/css/safety-home.png" alt="Safety and Wellbeing Home" width="235" height="136" /></a></div>
<div id="tab-navigation">
<div id="tab-nav">
<ul>
<li class="blank-group"><div id="groupNone" class="groups">&nbsp;</div></li>

<!-- Tab 1 -->
<li class="tab-1">
<a href="http://www.safetyandwellbeing.uts.edu.au/for.html" name="tab1" id="tablink-1" class="tab-1" onmouseover="javascript:switchTab(0);" onkeypress="javascript:switchTab(0);" onfocus="javascript:switchTab(0);" >
Information for</a>
</li>
<li id="group-1"><div id="group1" class="groups"><ul class="section-list">
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/first-aid/officers/index.html">First aid officers</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/student/index.html">Students</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/staff/technical.html">Technical staff</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/researchers/index.html">Researchers</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/contractors/index.html">Contractors and visitors</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/staff/academic.html">Academic staff</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/managers/index.html">Managers and supervisors</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/staff/support.html">Support staff</a></li>
</ul></div></li>

<!-- Tab 2 -->
<li class="tab-2">
<a href="http://www.safetyandwellbeing.uts.edu.au/about.html" name="tab2" id="tablink-2" class="tab-2" onmouseover="javascript:switchTab(1);" onkeypress="javascript:switchTab(1);" onfocus="javascript:switchTab(1);" >
About safety and wellbeing</a></li>
<li id="group-2"><div id="group2" class="groups"><ul class="section-list">
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/branch/index.html">Safety &amp; Wellbeing branch</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/management/index.html">Management system</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/forms/index.html">Forms</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/environment/index.html">Work environments</a></li>
<li class="SectionNavLevel3 current"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/index.html">Hazards</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/accidents/index.html">Reacting to a hazard, accident or incident</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/preventing/index.html"><span>Preventing injury and illness</span></a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/wellbeing/index.html">Wellbeing</a></li>
<li class="SectionNavLevel3"><a href="http://www.safetyandwellbeing.uts.edu.au/activities/index.html">Activities</a></li>
</ul></div></li>
</ul>


<script type="text/javascript">
<!--
switchTab(-1);
-->
</script>
<script type="text/javascript">
<!--
switchTab(1);
-->
</script>
</div>
</div>
</div>

<div id="full-container"> <!-- includes footer -->
<div id="main-container"> <!-- does not include footer -->

<!-- Sidebar -->
<div id="sidebar-wrapper"> <!-- important for IE6 -->
<div id="sidebar">
	
	<div id="level3-nav">
<div class="level3-nav-heading">
<a href="http://www.safetyandwellbeing.uts.edu.au/preventing/index.html">Preventing injury and illness</a>
</div>
<ul class="section-list">
<li class="SectionNavLevel4"><a href="http://www.safetyandwellbeing.uts.edu.au/risk-management/index.html">Risk management</a></li>
<li class="SectionNavLevel4"><a href="http://www.safetyandwellbeing.uts.edu.au/environment/index.html">Work environments</a></li>
<li class="SectionNavLevel4"><a href="http://www.safetyandwellbeing.uts.edu.au/activities/index.html">Activities</a></li>
<li class="SectionNavLevel4 current"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/index.html"><span>Hazards</span></a>
<ul id="sectionGroup20693">
<li class="SectionNavLevel5 current" id="currentpage"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/chemical/index.html"><span>Chemical</span></a>
<ul id="sectionGroup20701">
<li class="SectionNavLevel6"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/chemical/dangerous-goods.html">Dangerous goods</a></li>
<li class="SectionNavLevel6"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/chemical/inventory.html">OCID</a></li>
</ul>
</li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/diseases/index.html">Communicable diseases</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/electrical/index.html">Electrical</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/ladders/index.html">Ladders</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/lighting/index.html">Lighting and air quality</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/manual/index.html">Manual handling</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/microbiological/index.html">Microbiological</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/noise/index.html">Noise</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/plant/index.html">Plant and equipment</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/radiation/index.html">Radiation</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/sharps/index.html">Sharps and needlestick injuries</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/slings/index.html">Slings</a></li>
<li class="SectionNavLevel5"><a href="http://www.safetyandwellbeing.uts.edu.au/hazards/slips/index.html">Slips, trips and falls</a></li>

</ul>
</li>
</ul>
</div>
<div id="undernav-wrapper">
<div id="sidebar-buttons"><a href="https://uts.riskcloud.net/" id="report1"></a></div>
<div id="tabber" class="sb">

	<!-- News -->
	<h2><a href="#">Notices</a></h2>
	<!-- News -->
<!-- neAttributes -->
























<div class="tab-content">
	<h2>Notices</h2>

	<noscript><p>Display of this content requires JavaScript to be enabled. Please do so in your browser or use the links below.</p></noscript>
	<ul id="news-container">
		<li>
			<h3><a href="http://datasearch2.uts.edu.au/safety-wellbeing/notices/detail.cfm?ItemId={itemid}">{title}</a></h3>
			<p class="story-summary">{summary}</p>
			<p class="story-date">{published}</p>
		</li>
	</ul>
	<a href="http://datasearch2.uts.edu.au/safety-wellbeing/notices/index.cfm" class="more-newsevents" id="more-news">More notices</a>
	<a href="http://datasearch2.uts.edu.au/safety-wellbeing/notices/past/index.cfm" class="more-newsevents" id="past-news">Past notices</a>
	<a href="http://datasearch2.uts.edu.au/safety-wellbeing/notices/rss.cfm" class="rss-feed">RSS feed</a>
</div>

	<h2><a href="#">Contact</a></h2>
	<div class="tab-content">
		<div class="contact-in-a-tab">

<h3>Safety &amp; Wellbeing</h3>
<p><strong>In person</strong>, please phone ahead for an appointment:<br />
Level 6, 235 Jones Street (Building 10)<br/>
City campus<br/>
University of Technology, Sydney<br/>
Broadway NSW 2007<br/>
Australia</p>

<p><strong>By post</strong>:<br />
Safety &amp; Wellbeing<br />
University of Technology, Sydney<br />
PO Box 123<br />
Broadway NSW 2007<br />
Australia</p>



<p><strong>By fax</strong>:<br/>
+61 2 9514 1327</p>

</div>
	</div>
</div>
<div id="contact-out-of-tab"></div>
<div id="sidebar-logos"></div>
</div>
</div>
</div>

<!-- Main Column -->
<div id="main-column">

<!-- Banner -->
<div id="banner-wrapper">
            <div id="banner">

               <div class="internalbanner">

                  <div class="rightside"><img src="http://www.safetyandwellbeing.uts.edu.au/images/css/banner_prevent.png" width="304" height="100" alt="" /></div>
                  <div class="middleside"><h1>Chemical label creator</h1></div>

               </div>
            </div>
          </div>

<!-- Content -->
<div id="main-content-nobanner">
<div id="main-content">

<!-- Skip to Contents Anchor -->
<a name="start-content"></a>

<!-- Content Columns -->
<div id="contentsw" style="padding: 10px; margin-left:10px;">
<div class="ie-images"> <!-- fixes problem where images don't display in ie6 -->

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
		<form name="ghs_build" action="ghs_create.php" method="post" target="_blank">
			<h2>1. Enter name of substance:</h2> 
			<!-- <input type="text" size='60' maxlength='255' name="subst" /> -->
			<textarea name="subst" rows="4" cols="60"></textarea>
			<h2>2. Select signal word:</h2>
			<input type="radio" name="signl" value=" " checked /> None
			<input type="radio" name="signl" value="DANGER" /> Danger
			<input type="radio" name="signl" value="WARNING" /> Warning
			<h2>3. Select hazard pictogram:</h2>
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
			
			<h2>4. Select hazard statements by hovering over the category headings:</h2>
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
			<h2>5: Go!</h2>
			<input type="radio" name="output" value="prev" checked /> Preview<br />
			<input type="radio" name="output" value="2lbl" /> 2 labels per A4 page (use Avery L7168 labels); PDF<br />
			<input type="radio" name="output" value="8lbl" onclick="document.ghs_build.layout.checked=true;"/> 8 labels per A4 page (use Avery L7165 labels); PDF<br />
			<input type='checkbox' name='layout' value='simple' /> Simple Layout (Doesn't print risk statements - Required for smaller 8 label output)<br /><br />
			<input type="submit" value="Submit" />
		</form>
	</div>
<!-- Chemical Label Creator ends here -->






</div>
<!--<div class="clear"><img src="http://www.uts.edu.au/images/dot_clear.gif" width="15" height="2" alt="" border="0" /></div> -->
</div>


</div>
</div>

</div>
</div>

<!-- Footer -->

<div id="footer-wrapper">
<div id="website-footer">

<div id="footer-nav"><p><a href="http://www.safetyandwellbeing.uts.edu.au/for.html">Information for</a> 
<img src="http://www.safetyandwellbeing.uts.edu.au/images/css/separator.gif" alt="" width="4" height="6" /> 
<a href="http://www.safetyandwellbeing.uts.edu.au/about.html">About safety and wellbeing at UTS</a></p><div class="backto-sw-home"><a href="http://www.safetyandwellbeing.uts.edu.au/index.html"><img src="http://www.uts.edu.au/images/dot_clear.gif" alt="Home page" /></a></div></div>

<div id="footer-subnav">
<p>
<a href="http://www.safetyandwellbeing.uts.edu.au/index.html">UTS: Safety and wellbeing</a> | 
<a href="http://www.safetyandwellbeing.uts.edu.au/sitemap.html">Site map</a> | 
<a href="http://www.safetyandwellbeing.uts.edu.au/branch/contacts/index.html">Contacts</a> | 
<a href="http://datasearch2.uts.edu.au/safety-wellbeing/notices/index.cfm">Notices</a> | 
<a href="http://datasearch2.uts.edu.au/safety-wellbeing/events/index.cfm">Events</a></p>
</div>
<div class="backto-hru-home"><a href="http://hru.uts.edu.au/"><img src="http://www.uts.edu.au/images/dot_clear.gif" alt="HRU site" /></a></div>
</div>
<div id="global-footer">
<div id="footer-img">
<a href="http://www.uts.edu.au/">
<img src="http://www.uts.edu.au/images/css/uts_logo_footer.gif" alt="UTS homepage" width="130" height="29" /></a>
<br /><a href="http://www.atn.edu.au">UTS is a member of the<br />Australian Technology Network of Universities</a>
</div>

<div id="footer-text">
<div class="primary-links">
<a href="http://email.itd.uts.edu.au/webapps/directory/byname/">Staff directory</a> 
<img src="http://www.uts.edu.au/images/css/separator.gif" alt="" width="4" height="6" /> 
<a href="http://www.uts.edu.au/about/mapsdirections/">Campus maps</a>
<img src="http://www.uts.edu.au/images/css/separator.gif" alt="" width="4" height="6" /> 
<a href="http://newsroom.uts.edu.au/">Newsroom</a>
<img src="http://www.uts.edu.au/images/css/separator.gif" alt="" width="4" height="6" /> 
<a href="http://www.events.uts.edu.au/web/">What's on</a>
</div>
&copy; Copyright UTS - CRICOS Provider No: 00099F - 1 August 2012 2:15 PM<br />
The page is authorised by Branch Manager, Safety &amp; Wellbeing - 
Send comments to <a href="mailto:Campbell.Lee@uts.edu.au?subject=Web comment - Chemical page">Safety &amp; Wellbeing</a><br />
<a href="http://www.uts.edu.au/disclaimer.html">Disclaimer</a> |
<a href="http://www.uts.edu.au/privacy.html">Privacy</a> |
<a href="http://www.uts.edu.au/copyright.html">Copyright</a> |
<a href="http://www.uts.edu.au/accessibility.html">Accessibility</a> |
<a href="http://www.gsu.uts.edu.au/policies/webpolicy.html">Web policy</a> |
<a href="http://www.uts.edu.au/">UTS homepage</a>
</div>
</div>
</div>

</div>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-16622082-1");
pageTracker._trackPageview();

var utsMasterTracker = _gat._getTracker("UA-10919634-1");
utsMasterTracker._trackPageview("http://www.safetyandwellbeing.uts.edu.au");
utsMasterTracker._setDomainName(".uts.edu.au");



} catch(err) {}</script>
</body>
</html>