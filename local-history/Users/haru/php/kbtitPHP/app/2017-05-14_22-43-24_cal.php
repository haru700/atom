<?php
// ライブラリの読み込み
require_once('/Users/haru/php/kbtitPHP/src/Google/Client.php');
ini_set('memory_limit', '1000M');
require_once('/Users/haru/php/kbtitPHP/src/google-api-php-client-services/src/Google/Service/Calendar.php');
$apiConfig['use_objects'] = true;
$client = new Google_Client();
$client->setApplicationName("PHP Mook");

// APIキーの設定
// アクセストークンの設定
$client->setAccessToken($_SESSION['ACCESS_TOKEN']);
var_dump($client);
