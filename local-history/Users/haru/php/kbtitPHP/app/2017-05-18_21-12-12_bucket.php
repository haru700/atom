<?php

// 初期設定
require_once('/Users/haru/php/kbtitPHP/app/vendor/autoload.php');
use Aws¥S3¥S3Client;

// キーを設定して「クライアントクラス」を生成
$client = Client::factory([
  "key" => "AKIAI7PR25TZBW6OGGWQ",
  "seclet" => 'XaQOyI2SXooxUN/AYkUPmIxNfCcpFswX613uLZ+4',
]);

// bucketを作成する
$bucket = [
  'Bucket' =>  'kbtit',
];

$client->cliateBucket($bucket);
