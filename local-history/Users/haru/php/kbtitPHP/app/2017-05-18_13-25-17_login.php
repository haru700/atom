<?php
// ライブラリ/設定ファイルを読み込む
require_once ('/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php');
require_once ('/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/Hybrid/Endpoint.php');
$config = '/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/config.php';

$require = require_once ('/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php');

// 初期化処理
$auth = new Hybrid_Auth($config);

var_dump(); var_dump('here'); var_dump($auth); var_dump();
