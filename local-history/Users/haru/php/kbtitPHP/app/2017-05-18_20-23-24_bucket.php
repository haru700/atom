<?php

// 初期設定
require_once('/Users/haru/php/kbtitPHP/vendor/autoload.php');
use Aws¥S3¥S3Client;

// キーを設定して「クライアントクラス」を生成

$client = new S3Client();

var_dump('=================='); var_dump('client');
var_dump($client); var_dump('==================');
