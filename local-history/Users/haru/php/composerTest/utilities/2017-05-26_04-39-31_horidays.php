<?php
require_once("/Users/haru/php/pear/Date_Holidays-0.21.8/Date/Holidays.php");
$filename = "/Users/haru/php/pear/Date_Holidays_Japan-0.1.3/lang/Japan/ja_JP.xml";

// 年度をコンスと楽に指定して日本の祝日を取得
$dh = Date_Holydays::factory('Japan', date('Y'), 'ja_JP');
$dh->addTranslationFile($filename, 'ja_JP');

// 取得した祝日を表示
foreach($dh->getHolidays() as $h){
  echo $h->getDate()->format('%Y-%m-%d') . ' : ' . $h->getTitle() . '<br />';
}

var_dump('==================');
var_dump('dh');
var_dump($dh);
var_dump('==================');
