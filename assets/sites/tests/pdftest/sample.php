<?php
include 'PDFMerger.php';

$pdf = new PDFMerger;

$pdf->addPDF('a.pdf', '1')
	->addPDF('a.pdf', '2')
	->addPDF('a.pdf', '10')
	->merge('browser', 'output.pdf');
	
	//REPLACE 'file' WITH 'browser', 'download', 'string', or 'file' for output options
	//You do not need to give a file path for browser, string, or download - just the name.
