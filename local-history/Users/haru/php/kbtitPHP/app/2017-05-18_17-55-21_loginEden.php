<?php
require_once ('/Users/haru/php/pkg/eden/eden.php');
require_once ('/Users/haru/php/pkg/eden/config/config.php');

// 初期化処理
eden()->setLoader();

// 「認証URL」へ転送
$auth = eden()->auth($config['key'], $config['pass'], $config['callback_url']);
var_dump('=================='); var_dump('auth'); var_dump($auth); var_dump('==================');
