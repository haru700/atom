<?php

require_once('/Users/haru/php/kbtit2/vendor/autoload.php');
use aws¥s3¥S3Client;

// キーを設定してクライアントクラスを生成
$client = S3Client::factory([
  'key' =>  '',
  'secret' => '',
]);

$temp_file = tempnam("data", "tmp-");

// データ取得
$ret = $client->getObject([ 
  'Bucket' => 'mookphp', 
  'Key' => 'sample/data1.txt', 
]);
