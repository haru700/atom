<?php
# @Author: haru
# @Date:   2017-05-26T10:43:23+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T11:09:46+09:00


require_once("./queue_config.php");

// Mail_Queueオブジェクトの準備
$queue = new Mail_Queue($db, $mail);

// メール本体を準備
$mime = new Mail_mime();
$mime->setTxtBody(mb_convert_encoding('今日はいい天気です。', 'JIS', 'auto') );

var_dump('==================');
var_dump('queue');
var_dump($queue);
var_dump('==================');
