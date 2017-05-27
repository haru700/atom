<?php
# @Author: haru
# @Date:   2017-05-26T08:31:59+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T09:40:57+09:00



require_once("/Users/haru/php/pear/Mail-1.4.1/Mail.php");
require_once("/Users/haru/php/pear/Mail_Mime-1.10.1/Mail/mime.php");


// メール本文を準備
$mime = new Mail_mime();

// HTML本文
$mime->setHTMLBody('./resoruces/foo.txt', TRUE);
// 添付リソースを添付
$mime->addAttachment('./resoruces/b1.pdf', 'application/pdf');



// メール送信の準備
$mail = Mail::factory('smtp', [
  // SMTPホスト名
  'host' => 'smtp.kbtit.com',
  // ポート番号
  'port' => 25,
  'auth' => FALSE,
]);


// メールを送信
$mail->send(
  // 宛先
  'gyobeke@gmail.com',
  $mime->headers([
    // ヘッダ情報
    'From' => mb_encode_mimeheader('久保帯人', 'ISO-2202-JP') . '<haruhito.yamazaki2@gmail.com>',
    'To' => mb_encode_mimeheader('野獣先輩', 'ISO-2202-JP') . '<gyobeke@gmail.com>',
    'Subject' => mb_encode_mimeheader('イキスギィ!', 'ISO-2202-JP') . '<gyobeke@gmail.com>',
  ]),
  $mime->get([
    // 本文
    'html_encoding' => 'base64',
    'html_charset' => 'Shift_JIS',
  ])
);

var_dump('==================');
var_dump('mail');
var_dump($mail);
var_dump('==================');

var_dump('==================');
var_dump('mime');
var_dump($mime);
var_dump('==================');

debug_print_backtrace();
