<?php
// 必要なライブラリ読み込み
require_once('/Users/haru/php/kbtitPHP/src/Google/Client.php');
require_once('/Users/haru/php/kbtitPHP/src/google-api-php-client-services/src/Google/Service/Drive.php');
$apiConfig['user_objects'] = true;
$client = new Google_Client();

// APIキーの設定
$client->setClientId("317125129650-220q83jq4ekr1sspieosrerg3e01o171.apps.googleusercontent.com");
$client->setClientSecret("kWu6dJQRJtsLWUBlxak290kG");
$client->setRedirectUri("http://foo.com/oauth2callback");
$client->setDeveloperKey("AIzaSyBY3pgqQMrYdKI5c_Vyou9zP_mVhgV_qs0");

// アクセストークンの設定
$client->setAccessToken('ya29.GltKBIfQ6s5tt-LGrGdH-skJOGPrw13SB-DiKJDrvXEv04wp9tcmoqpC8pHTSqhloX5lw1N6HWSPTPWiUVsgaA7OLU48aB05gw4CJq8YHQdROeGs6z2dHkpMAQvB');

$drive = new Google_Sevice_Drive($client);




