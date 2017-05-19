<?php

// 初期設定
require_once('/Users/haru/php/kbtitPHP/vendor/autoload.php');
require_once('/Users/haru/php/kbtitPHP/vendor/aws/aws-sdk-php/src/Aws/S3/S3Client.php');

// キーを設定して「クライアントクラス」を生成

$client = S3Clientfactory([
  "key" => , "AKIAI7PR25TZBW6OGGWQ",
  "secret" => , "XaQOyI2SXooxUN/AYkUPmIxNfCcpFswX613uLZ+",
]);

var_dump('=================='); var_dump('client');
var_dump($client); var_dump('==================');
