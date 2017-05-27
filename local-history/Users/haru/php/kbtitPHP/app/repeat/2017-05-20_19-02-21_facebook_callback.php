<?php
require_once ('eden.php');
require_once ('config.php');

// セッションを介し
session_start();

eden()->setLoader();
$auth = func('facebook')->auth($config['key'], $config['pass'], $config['callback_url']);

// アクセストークン
$access = $auth->getAccess($_GET['code']);
