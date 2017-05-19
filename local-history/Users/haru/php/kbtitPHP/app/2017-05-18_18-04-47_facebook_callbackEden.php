<?php
require_once ('/Users/haru/php/pkg/eden/eden.php');
require_once ('/Users/haru/php/pkg/eden/config/config.php');

// セッションを開始
session_start();

eden()->setLoader();
$auth = eden('google')->auth($config['key'], $config['pass'], $config['callback_url']);

var_dump('=================='); var_dump('get code'); 
var_dump($_GET['code']); var_dump('==================');
// 「アクセストークン」の取得
$access = $auth->getAccess($_GET['code']);
