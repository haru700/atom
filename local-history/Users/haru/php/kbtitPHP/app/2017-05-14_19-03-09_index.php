<?php
// 必要なライブラリ読み込み
ini_set('include_path', ini_get('include_path').PATH_SEPARATORPATH_SEPARATOR."./google-api-php-client/src");
require_once ('Google/Client.php');
session_start();

// APIキーの設定と初期化
$client = new Google_Client();
$client->setApplicationName("PHP Mook");
$client->setClientId("317125129650-avtb7g0j906dtb28qsne4sdelplnevus.apps.googleusercontent.com");
$client->setClientSecret("AIzaSyBY3pgqQMrYdKI5c_Vyou9zP_mVhgV_qs0");
