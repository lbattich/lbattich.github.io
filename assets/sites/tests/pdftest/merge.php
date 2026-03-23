<?php

require_once("/home/lucasbat/public_html/tcpdf/tcpdf.php");
require_once("/home/lucasbat/public_html/fpdi/fpdi.php");

$pdf = new FPDI();

$pdf->SetAuthor('Lucas');
$pdf->SetTitle('concat pdfs');
$pdf->SetSubject('subject');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$totalpages = $pdf->setSourceFile("a.pdf");

$pages = range(1, $totalpages);
shuffle($pages);

foreach($pages as $page)
{
	$tplIdx = $pdf->importPage($page);
	$size = $pdf->getTemplateSize($tplIdx);
	$pdf->AddPage('P', array($size['w'], $size['h']));
	$pdf->useTemplate($tplIdx);
}

$pdf->Output("TheStoryOfArt.pdf", "I");
?>