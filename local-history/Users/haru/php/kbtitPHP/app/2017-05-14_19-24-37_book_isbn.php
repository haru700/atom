<?php
// ライブラリの読み込み
ini_set('include_path', ini_get('include_path').PATH_SEPARATOR."./google-api-php-client/src");
require_once ('../src/Google/Client.php');
require_once ('../src/Google/Service/Books.php');
session_start();

// APIに接続するための初期設置
$apiConfig['use_objects'] = true;
$client = new Google_Client();
