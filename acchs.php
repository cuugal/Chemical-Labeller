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
<script language="JavaScript">
	function windowopener(){
	var x = document.acchs_search.srchname.value;
	var y = document.acchs_search.srchnumb.value;
	controlWindow=window.open("acchs_popup.php?name="+x+"&numb="+y,"","toolbar=no,location=no,directories=no,status=yes,menubar=no,scrollbars=yes,resizable=no,width=640,height=480");
	}
</script>

<!-- sandw scripts -->

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
<!-- end of sandw scripts -->

</head>
<body id="about">


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
		<li><a href="./ghs.php">GHS</a></li> 
		<li><a href="./acchs.php" class="active">ACCHS</a></li> 
		<li><a href="./instructions.html">Instructions</a></li>
	</ul> 
</div>

<br />

	<div id="contentp">
	<p>For Approved Criteria for Classifying Hazardous Substances (NOHSC:1008[2004]) labelling</p>
	<h2>1. Search for a pure substance by chemical name or CAS Number:</h2> 
	<form name="acchs_search">
		Chemical name: <input type="text" size='30' name="srchname" />
		CAS Number: <input type="text" size='12' name="srchnumb" />
		<input type="button" name="subtsrch" value="Search" onclick="windowopener()">
	</form>
	<h2>2. Details of substance:</h2> 
	<form name="acchs_build" action="acchs_create.php" method="post" target="_blank">
		
	<table id="substancetable">
	<tr>
		<td>Name</td>
		<td><textarea name="subst" rows="3" cols="60"></textarea></td>
	</tr>
	<tr>
		<td>Signal Words</td>
		<td><input type="text" maxlength="255" size="60" name="signl"></td>
	</tr>
	<tr>
		<td>Risk Phrases</td>
		<td><textarea name="risks" rows="10" cols="60"></textarea></td>
	</tr>
	<tr>
		<td>Safety Phrases</td>
		<td><textarea name="safety" rows="10" cols="60"></textarea></td>
	</tr>
		
	</table>

<!--		<p>Name: <textarea name="subst" rows="3" cols="60"></textarea></p>
		<p>Signal Words: <input type="text" maxlength='255' size='50' name="signl"></p>
		<p>Risk Phrases: <textarea name="risks" rows="10" cols="60"></textarea></p>
		<p>Safety Phrases: <textarea name="safety" rows="10" cols="60"></textarea></p>-->
		<h2>3. Go!</h2> 
		<input type="radio" name="output" value="prev"  checked /> Preview<br />
		<input type="radio" name="output" value="2lbl" /> 2 labels per A4 page (use Avery L7168 labels); PDF<br />
		<input type="radio" name="output" value="8lbl" /> 8 labels per A4 page (use Avery L7165 labels); PDF<br />
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