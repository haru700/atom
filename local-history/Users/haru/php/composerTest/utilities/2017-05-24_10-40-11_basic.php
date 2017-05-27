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

// キャッシュの有無を✓
if($data = $cache->get('current')){
  // キャッシュがあればそのまま出力  
  print($data);
}else{
  // なければ、データを生成&保存
  $data = date('Y年m月d日 G:i:s');
  
}
