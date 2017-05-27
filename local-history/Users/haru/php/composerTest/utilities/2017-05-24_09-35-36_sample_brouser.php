<!DOCTYPE html><html><body></body></html>
<?php
require_once('/Users/haru/php/pkg/pdfMerger/PDFMerger.php');

// オブジェクトの生成
$pdf = new PDFMerger();

// ページの指定
$pdf->addPDF('./resources/t1.pdf', '1-2')
    ->addPDF('./resources/b1.pdf', 'all')
    ->merge('browser');
