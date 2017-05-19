<?php

// 初期設定
require_once('/Users/haru/php/kbtitPHP/vendor/autoload.php');
use Aws¥S3¥S3Client;

// キーを設定して「クライアントクラス」を生成

$client = S3Client::factory([
  "key" =>  "AKIAI7PR25TZBW6OGGWQ",
  "secret" =>  "XaQOyI2SXooxUN/AYkUPmIxNfCcpFswX613uLZ+",
]);

var_dump('=================='); var_dump('client');
var_dump($client); var_dump('==================');
