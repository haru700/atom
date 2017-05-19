<?php
require_once ('/Users/haru/php/pkg/eden/eden.php');
require_once ('/Users/haru/php/pkg/eden/config/config.php');

// セッションを開始
session_start();

eden()->setLoader();
$auth = eden('google')->auth($config['key'], $config['pass'], $config['callback_url']);

// 「アクセストークン」の取得
$access = $auth->getAccess($_GET['code']);
