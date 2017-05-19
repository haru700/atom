<?php
require_once('/Users/haru/php/kbtit2/vendor/autoload.php');

// 初期設定
$apiKey = "o8q6m155fbtrsc9";
$apiSecret = "kfu3shoe7bl4dkn";
$oauth = new Dropbox_OAuth_PHP($apiKey, $apiSecret);
session_start();

try{
  if(!isset($_SESSION['state'])  ){
    $_SESSION['state'] = 1;
  }
  $state = $_SESSION['state'];

  switch($state){ case 1 :
    // Dropbox認証ページへの遷移
    $token = $oauth->getRequestToken();
    if($token){
      $_SESSION['token'] = $token;
      $_SESSION['state'] = 2;
      $url = $oauth->getAuthorizeUrl($_SERVER['SCRIPT_URI']);
      print "認証がされていません";
      print sprintf("<br /><a href='%s'>Dropboxの認証に進む</a>", $url);
      return ;
    }
    break;
  case 2 : break;
  case 3 : break;
}
}catch{

}
