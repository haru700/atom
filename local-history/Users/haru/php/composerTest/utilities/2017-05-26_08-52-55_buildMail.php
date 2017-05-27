<?php
require_once("/Users/haru/php/pear/Mail-1.4.1/Mail.php");
require_once("/Users/haru/php/pear/Mail_Mime-1.10.1/Mail/mime.php");


// メール本文を準備
$mime = new Mail_mime();

// HTML本文
$mime->setHTMLBody('./resoruces/foo.txt', TRUE);



// メール送信の準備
$mail = Mail::factory('smtp', [
  // SMTPホスト名
  'host' => 'smtp.kbtit.com',
  // ポート番号
  'port' => 25,
  'auth' => FALSE,
]);

var_dump('==================');
var_dump('mail');
var_dump($mail);
var_dump('==================');
