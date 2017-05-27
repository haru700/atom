<?php
# @Author: haru
# @Date:   2017-05-26T10:43:23+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T10:45:08+09:00


require_once("./queue_config.php");

// Mail_Queueオブジェクトの準備
$queue = new Mail_Queue($db, $mail);

var_dump('==================');
var_dump('queue');
var_dump($queue);
var_dump('==================');
