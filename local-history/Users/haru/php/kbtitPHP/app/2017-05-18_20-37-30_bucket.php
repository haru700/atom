<?php

// 初期設定
require_once('/Users/haru/php/kbtitPHP/vendor/autoload.php');
require_once('/Users/haru/php/kbtitPHP/vendor/aws/aws-sdk-php/src/Aws/S3/S3Client.php');
use Aws¥S3¥S3Client;

// キーを設定して「クライアントクラス」を生成

$client = new S3Client();

