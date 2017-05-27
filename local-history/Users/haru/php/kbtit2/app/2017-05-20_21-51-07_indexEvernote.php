<?php
// 認証の流れ

require_once('/Users/haru/php/kbtit2/vendor/autoload.php');

// APIキーの設定と初期化

$config = [
  'consumerKey' =>  'haru',
  'consumerSecret' => '8e685f82315ce21',
  'sandbox' => true, 
];

use Evernote¥Client;
