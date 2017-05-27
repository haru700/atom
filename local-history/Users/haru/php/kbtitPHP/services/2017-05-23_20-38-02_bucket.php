<?php

// 初期設定
require_once('/Users/haru/php/kbtitPHP/services/vendor/autoload.php');

// キーを設定して「クライアントクラス」を生成
$client = Client::factory([
  "key" => "AKIAI7PR25TZBW6OGGWQ",
  "seclet" => 'XaQOyI2SXooxUN/AYkUPmIxNfCcpFswX613uLZ+4',
]);

// bucketを作成する
$bucket = [
  'Bucket' =>  'kbtit',
];

$client->createBucket($bucket);

// bucketを削除する
$client->deleteBucket($bucket);
