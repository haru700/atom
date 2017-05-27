<?php
require_once("/Users/haru/php/pear/Log-1.13.1/Log.php");

// エラー出力を無効化
error_reporting(0);

// 「エラーハンドラ」を定義
function errorHandler($num, $message, $file, $line){
  $l = Log::factory('mail', 'gyomeke@gmail.com', 'phpmook');
}

$obj = new Foo();

var_dump('==================');
var_dump('');
var_dump();
var_dump('==================');
