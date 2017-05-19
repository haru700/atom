<?php
require_once('/Users/haru/php/kbtit2/vendor/autoload.php');

// 初期設定
$apikey = "o8q6m155fbtrsc9";
$secret = "kfu3shoe7bl4dkn";
$oauth = new Dropbox_OAuth_PHP($apiKey, $apiSecret);
session_start();

var_dump('=================='); var_dump('session state');
var_dump($_SESSION['state']); 
var_dump('==================');

try{
  if(!isset()  ){

  }
}catch(){

}
