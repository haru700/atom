<?php
require_once('/Users/haru/php/pkg/pdfMerger/PDFMerger.php');

// オブジェクトの生成
$pdf = new PDFMerger();

// ページの指定
$pdf->addPDF('./rasources/t1.pdf', '1-2')
    ->('./resources/b1.pdf', 'all')
    // ブラウザ表示
    ->merge('browser');
