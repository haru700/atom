<?php
# @Author: haru
# @Date:   2017-05-26T10:33:42+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T10:41:18+09:00



require_once("/Users/haru/php/pear/Mail_Queue-1.2.7/Mail/Queue.php");

$db = [
  'type' =>  'mdb2',
  // DSN 「接続文字列」
  'dsn' => 'msqli://haru:vagrnt@localhost/kbtit', 
  'mail_table' => 'mail_queue',
];

$mail = [
  'driver' =>  'smtp', 
  'host' => 'smtp.kbtit.com', 
  'port' => 25, 
  'auth' => FALSE, 
];

$db = new Foo();

var_dump('==================');
var_dump('');
var_dump();
var_dump('==================');
