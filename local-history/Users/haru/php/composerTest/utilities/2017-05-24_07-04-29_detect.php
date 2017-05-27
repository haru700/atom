<?php
require_once('/Users/haru/php/pkg/mobileDetect/Mobile_Detect.php');

echo "<pre>"; 
  // MobileDetectオブジェクトの生成
  $detect = new Mobile_Detect();
  var_dump('=================='); var_dump('detect'); 
  var_dump($detect); var_dump('==================');
echo "</pre>";
