<?php
// ライブラリ/設定ファイルを読み込む
require_once ('/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php');
require_once ('/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/Hybrid/Endpoint.php');
$config = '/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/config.php';

$require = require_once ('/Users/haru/php/kbtitPHP/vendor/hybridauth/hybridauth/hybridauth/Hybrid/Auth.php');



// 初期化処理
var_dump($require);
$auth = new Hybrid_Auth($config);

// // セッション開始認証の実行
// session_start();
// $twitter = $auth->authenticate("Twitter");
//
// // 認証後の処理
// $twitter_user_profile = $twitter->getUserProfile();
// $twitter_id = $twitter_user_profile->identifier;
// $twitter_name = $twitter_user_profile->displaName;
//
// echo "ようこそ、". $twitter_name."さん";
