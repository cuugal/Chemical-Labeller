<?php

//*****************
// This script created and maintained by Andrew Edwards
// CB01.20.19 Phone: x2843
// For: UTS: Safety and Wellbeing
// Libraries used: FPDF
//*****************

function pdf($filename,$pp) {
	require('./lib/fpdf.php');
	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	if ($pp==2)	{
	//2 per page
	$x1=5;
	$lbl_w=199;
	
	$pdf->Image($filename,$x1,6,$lbl_w);
	$pdf->Image($filename,$x1,150,$lbl_w);
	}	else	{
	//8 per page
	$lbl_w = 93;
	$x1 = 8;
	$x2 = 110;
	
	$pdf->Image($filename,$x1,14,$lbl_w);
	$pdf->Image($filename,$x2,14,$lbl_w);
	$pdf->Image($filename,$x1,82,$lbl_w);
	$pdf->Image($filename,$x2,82,$lbl_w);
	$pdf->Image($filename,$x1,150,$lbl_w);
	$pdf->Image($filename,$x2,150,$lbl_w);
	$pdf->Image($filename,$x1,218,$lbl_w);
	$pdf->Image($filename,$x2,218,$lbl_w);
	}
	
	$pdf->Output("labels.pdf","I");
	//$pdf->Output("ghs.pdf","D");
}
?>