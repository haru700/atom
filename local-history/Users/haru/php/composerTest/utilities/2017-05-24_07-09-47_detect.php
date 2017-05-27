<?php
require_once('/Users/haru/php/pkg/mobileDetect/Mobile_Detect.php');

echo "<pre>";
  // MobileDetectオブジェクトの生成
  $detect = new Mobile_Detect();

  // mモバイルかどうか
  $check = $detect->isMoblie();

  echo isMobile.' → ';
  var_dump($check);

  // タブレットかどうか
  $check = $detect->isTablet();
  echo isTablet.' → ';
  var_dump($check);

  echo "¥n";

  // 各メーカーやOSの判別
  var_dump('=================='); var_dump('getRules');var_dump($idetect->getRules() ); var_dump('==================');
echo "</pre>";
