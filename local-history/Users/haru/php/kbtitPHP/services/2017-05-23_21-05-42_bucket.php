<?php


namespace Foo{
// 初期設定
require_once('/Users/haru/php/kbtitPHP/vendor/autoload.php');
use Aws¥S3¥S3Client;

// キーを設定して「クライアントクラス」を生成
$client = S3Client::factory([
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

}
