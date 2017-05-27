<?php
require_once("/Users/haru/php/pear/cache_lite/Cache_Lite-1.8.0/Cache/Lite/Output.php");

// キャッシュの準備
$cache = new Cache_Lite_Output([
  'cacheDir' => '/tmp/',
  'lifeTime' => 600,
  'hashedDirectoryLevel' => 5,
]);

var_dump('=================='); var_dump(''); var_dump($cache->start('page') ); var_dump('==================');
// ページキャッシュの判定 & キャッシュの開始
