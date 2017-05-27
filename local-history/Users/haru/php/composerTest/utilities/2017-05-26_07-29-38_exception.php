<?php
require_once("/Users/haru/php/pear/Log-1.13.1/Log.php");

// エラー出力を無効化
error_reporting(0);

// 「エラーハンドラ」を定義
function errorHandler($num, $message, $file, $line){
}

// エラーハンドラを登録
set_exception_handler('errorHandler');

var_dump('=================='); var_dump('l'); var_dump($l); var_dump('==================');
