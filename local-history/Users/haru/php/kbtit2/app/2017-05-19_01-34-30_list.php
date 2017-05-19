<?php
// アクセスキーとシークレットキーを設
require_once('/Users/haru/php/kbtit2/vendor/autoload.php');

// 初期設定
$apiKey = "o8q6m155fbtrsc9";
$apiSecret = "kfu3shoe7bl4dkn";
$oauth = new Dropbox_OAuth_PHP($apiKey, $apiSecret);
session_start();定