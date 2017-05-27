<?php
require_once("/Users/haru/php/pear/Date_Holidays_Japan-0.1.3/Date/Holidays/Driver/Japan.php");
$filename = "/Users/haru/php/pear/Date_Holidays_Japan-0.1.3/lang/Japan/ja_JP.xml";

// 年度をコンスと楽に指定して日本の祝日を取得
$dh = Date_Holydays::factory('Japan', date('Y'), 'ja_JP');

var_dump('==================');
var_dump('');
var_dump();
var_dump('==================');
