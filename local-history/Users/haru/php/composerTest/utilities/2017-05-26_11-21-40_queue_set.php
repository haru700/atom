<?php
# @Author: haru
# @Date:   2017-05-26T10:43:23+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T11:18:08+09:00


require_once("./queue_config.php");

// Mail_Queueオブジェクトの準備
$queue = new Mail_Queue($db, $mail);

// メール本体を準備
$mime = new Mail_mime();
$mime->setTxtBody(mb_convert_encoding('今日はいい天気です。', 'JIS', 'auto') );

// キューにメールを保存
$result = $queue->put(
  'src@gmail.com',
  'dist@gmail.com',
  $mime->headers([
    'From' => mb_encode_mimeheader('久保帯人', 'ISO-2022-JP') . '<kbtit@gmail.com>',
    'To' => mb_encode_mimeheader('野獣先輩', 'ISO-2022-JP') . '<yaju@gmail.com>',
    'Subject' => mb_encode_mimeheader('Mail_Queueです。', 'ISO-2022-JP'),
    'Content-Type' => 'text/plain; charset=ISO-2022-JP',
  ]),
  $mime->get([ 
    'head_charset' => 'ISO-2022-JP', 
    'text_charset' => 'ISO-2022-JP', 
  ])
);

var_dump('==================');
var_dump('queue');
var_dump($queue);
var_dump('==================');
