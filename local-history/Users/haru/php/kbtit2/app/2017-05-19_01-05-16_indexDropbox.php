<?php
require_once('/Users/haru/php/kbtit2/vendor/autoload.php');

// 初期設定
$apikey = "o8q6m155fbtrsc9";
$secret = "kfu3shoe7bl4dkn";
$oauth = new Dropbox_OAuth_PHP($apiKey, $apiSecret);
var_dump('=================='); var_dump('oauth');
var_dump($oauth);
var_dump('==================');
session_start();

