<?php
require_once("/Users/haru/php/pear/cache_lite/Cache_Lite-1.8.0/Cache/Lite.php");

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
  $cache->save($data, 'current');

  print($data);
}

// キャッシュキー
$cache_key = 'cache' . md5(serialize($_GET) . serialize($_POST) );

var_dump('=================='); var_dump('cache_key'); var_dump($cache_key); var_dump('==================');
