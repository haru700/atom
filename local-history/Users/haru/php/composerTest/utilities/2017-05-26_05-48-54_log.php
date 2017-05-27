<?php
require_once("/Users/haru/php/pear/Log-1.13.1/Log.php");

// 「ファイル」にロギングする「Logオブジェクト」を生成
$l = Log::factory('file', './out/app.log', 'phpmook');

var_dump('==================');
var_dump('');
var_dump($l);
var_dump('==================');

// レベルの異なるログを順に出力
