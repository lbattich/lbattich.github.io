<?php

require_once("/home/lucasbat/public_html/tcpdf/tcpdf.php");

$ip = $_SERVER["REMOTE_ADDR"];
$string = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "V", "Z", " ", ".", ",");
$vol = mt_rand();

function generate() {
	$page = "";
	for ($x=0; $x < 40; $x++){
		$page .= makeline() . "\n" . "\n";
	}
	return $page;
}

function makeline() {
	global $string;
	$line = "";
	for ($i=0; $i < 80; $i++){
		$line .= $string[mt_rand(0, 24)];
	}
	return $line;
}

$pdf = new TCPDF("P", "mm", "A4");

$pdf->SetAuthor("Lucas Battich & User with IP " . $ip);
$pdf->SetTitle("Library of Babel Volume #" . $vol);
$pdf->SetSubject("Library of Babel Volume");
$pdf->SetKeywords("generated, library, babel");

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set margins
$pdf->SetMargins(32, 25);

// set auto page breaks
$pdf->SetAutoPageBreak(FALSE);

// set font
$pdf->SetFont("helvetica", "", 7);

// $txt = generate();

// $pdf->AddPage();

// $pdf->Write(0, $txt, "", 0, "L", true, 0, false, false, 0);


for ($ii=0; $ii < 10; $ii++ ) {
	$pdf->AddPage();
	$pdf->Write(0, generate(), "", 0, "L", true, 0, false, false, 0);

}


$pdf->Output("Library of Babel Volume #" . $vol . ".pdf", "I");
?>