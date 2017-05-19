<?php
require_once('/Users/haru/php/kbtitPHP/src/googleMaps/releases/3.0/src/GoogleMap.php');
require_once('/Users/haru/php/kbtitPHP/src/googleMaps/releases/3.0/src/JSMin.php');

// インスタンス生成
$gmap = new GoogleMapAPI();
// スマホ対応
$gmap->mobile = true;

// 地図の種類を指定
$gmap->setMapType('map');

// マーカーを追加(表示する地点, 地図のタイトル, 吹き出しで表示する文字)
$gmap->addMarkerByAddress("井の頭公園", "井之頭公園周辺マップ", "井之頭公園の入口");

// ズームの指定
$gmap->setZoomLevvel(17);
?>

<html>
  <head>
    <meta charset="utf-8">
    <!-- // Google Maps APIのJavaScriptを出力 -->
    <?php echo $gmap->getHeaderJS() ?>
  </head>
  <body></body>
</html>
