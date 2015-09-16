<?php

//*****************
// This script created and maintained by Andrew Edwards
// CB01.20.19 Phone: x2843
// For: UTS: Safety and Wellbeing
//*****************

function preview ($filename,$active) {

echo '
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body style="width: 1080px;">
	<div id="content">';

echo 'Preview of label:<br />';
echo '<img src="'.$filename.'" style="width: 1024px; border: solid 1px black;">';
//echo '<FORM><INPUT TYPE="BUTTON" VALUE="Return" ONCLICK="history.go(-1)"></FORM>';
echo '<br /><br /><FORM><INPUT TYPE="BUTTON" VALUE="Return (Close Window)" ONCLICK="window.close()"></FORM>';
//echo '<FORM METHOD="LINK" ACTION="./pdf.php?pp=2"><INPUT TYPE="submit" VALUE="2 labels per A4 Page"></FORM>';
//echo '<FORM METHOD="LINK" ACTION="./pdf.php?pp=4"><INPUT TYPE="submit" VALUE="4 labels per A4 Page"></FORM>';

echo '
</div>
</body>
</html>';

}
?>