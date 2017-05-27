<?php
require_once("/Users/haru/php/pear/cache_lite/Cache_Lite-1.8.0/Cache/Lite.phpo");

// Cache Liteの準備
$cache = new Cache_Lite([
  // キャッシュの保存先フォルダ
  'cacheDir' => '/tmp/', 
  // キャッシュの有効期限
  'lifeTime' => 600, 
  // キャッシュフォルダの改装
  'hashedDirectoryLevel' => 5, 
  
]);
