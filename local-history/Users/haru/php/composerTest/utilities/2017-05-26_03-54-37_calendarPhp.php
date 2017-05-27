<?php
require_once("/Users/haru/php/pear/Calendar-0.5.5/Month/Weekdays.php");

// 年月を指定して日曜日から始まる付きカレンダーを取得 0 日曜日 6: 土曜日
$month = new Calendar_Month_Weekdays(date("Y"), date("m"), 0);

$month->build();
var_dump('=================='); var_dump('$month'); var_dump($month); var_dump('==================');

echo '<table width="350" border="1" cellspacint="0" style="font:12px;background-color: #00f;"><thead><tr>';
  echo '<th style="color;ff0000;">日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th style="color:0000ff">土</th>';


echo '</table>';
