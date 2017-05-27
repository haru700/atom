<?php
require_once('/Users/haru/php/pkg/mobileDetect/Mobile_Detect.php');

echo "<pre>";
  // MobileDetectオブジェクトの生成
  $detect = new Mobile_Detect();

  // mモバイルかどうか
  $check = $detect->isMoblie();
  var_dump('=================='); var_dump('check');var_dump($check); var_dump('==================');

  echo isMobile.' → ';  
  var_dump($check);

  // タブレットかどうか
  $check = $detect->isTablet();
  echo isTablet.' → ';  
  var_dump($check);

  echo "¥n";
echo "</pre>";
