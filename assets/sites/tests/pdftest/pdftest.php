<?php

require_once("/home/lucasbat/public_html/tcpdf/tcpdf.php");
require_once("/home/lucasbat/public_html/fpdi/fpdi.php");

class ConcatPdf extends FPDI
{
    public $files = array();
    public $pages = array();

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
    }

    public function concat()
    {
        $this->setSourceFile($file);
        foreach($this->pages AS $page) {
            $tplIdx = $this->ImportPage($page);
            $s = $this->getTemplatesize($tplIdx);
            $this->AddPage($s['w'] > $s['h'] ? 'L' : 'P', array($s['w'], $s['h']));
            $this->useTemplate($tplIdx);
        }
    }
}

$pdf = new ConcatPdf();

$pdf->SetAuthor('Lucas');
$pdf->SetTitle('concat pdfs');
$pdf->SetSubject('subject');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->setFile("a.pdf");
$pdf->setPages(array(2,10,1));
$pdf->concat();
$pdf->Output("newpdf.pdf", "I");
?>