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

  foreach($detect->getRules() as $name => $regex){
    var_dump('=================='); var_dump('name');var_dump($name); var_dump('==================');
    var_dump('=================='); var_dump('regex');var_dump($regex); var_dump('==================');
    $check = $detect->{'is'.$name()};
    echo $name . ' → ';
    var_dump($check);
  }
echo "</pre>";
