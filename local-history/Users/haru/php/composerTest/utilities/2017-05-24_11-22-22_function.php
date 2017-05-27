<?php
require_once("/Users/haru/php/pear/cache_lite/Cache_Lite-1.8.0/Cache/Lite/Function.php");

// キャッシュ対象の関数
function currentTime($format){
  return date($format);
}

// キャッシュの準備
$cache = new Cace_Lite_function([
  'cacheDire' => '/tmp/',
  'lifeTime' => 600, 
  'hashedDirectoryLevel' => 5, 
]);
