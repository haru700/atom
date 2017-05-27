<?php
# @Author: haru
# @Date:   2017-05-26T11:30:18+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T11:34:02+09:00



require_once("/Users/haru/php/composerTest/utilities/queue_config.php");

$queue = new Mail_Queue($db, $mail);
$queue->sendMailInQueue(10);

var_dump('==================');
var_dump('');
var_dump();
var_dump('==================');
