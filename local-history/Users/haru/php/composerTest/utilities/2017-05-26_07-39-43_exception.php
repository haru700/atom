<?php
require_once("/Users/haru/php/pear/Log-1.13.1/Log.php");

// エラー出力を無効化
error_reporting(0);

// 「エラーハンドラ」を定義
function exceptionHandler($ex){
  $l = Log::factory('mail', 'gyobeke@gmail.com', 'phpmook');
  $l->log("【{$ex->getFile()} {$ex->getLine()}】 {$ex->getMessage()}",
          PEAR_LOG_CRIT);
  var_dump('=================='); var_dump('ex'); var_dump($ex); var_dump('==================');
}

// エラーハンドラを登録
set_exception_handler('exceptionHandler');

throw new Exception("アプリで例外が発生しました。");
