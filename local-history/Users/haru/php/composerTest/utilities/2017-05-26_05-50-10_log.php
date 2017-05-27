<?php
require_once("/Users/haru/php/pear/Log-1.13.1/Log.php");

// 「ファイル」にロギングする「Logオブジェクト」を生成
$l = Log::factory('file', './out/app.log', 'phpmook');

var_dump('==================');
var_dump('');
var_dump($l);
var_dump('==================');

// レベルの異なるログを順に出力
$l->log('システム利用不可', PEAR_LOG_EMERG);
$l->log('至急の対応用', PEAR_LOG_);
