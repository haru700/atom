<?php
require_once("/Users/haru/php/pear/Log-1.13.1/Log.php");

// エラー出力を無効化
error_reporting(0);

// 「エラーハンドラ」を定義
function errorHandler($num, $message, $file, $line){
  $l = Log::factory('mail', 'gyomeke@gmail.com', 'phpmook',
                    [
                      // 送信元アドレス
                      'from' => 'gyobeke@gmail.com',
                      // 件名
                      'subject' => 'アプリエラー通知',
                      // 前文
                      'preamble' => 'アプリで致命的なエラーが発生しています。',
                    ]
  );

  // ログ出力の後「エラーページ」(HTML(.php)) を表示
  $l->setMask(Log::MAX(PEAR_LOG_ERR) );
  $l->log("【$file $line】$message", PEAR_LOG_CRIT);
  require_once("./error.php");
  exit();
}

// エラーハンドラを登録
set_error_handler('errorHandler');
