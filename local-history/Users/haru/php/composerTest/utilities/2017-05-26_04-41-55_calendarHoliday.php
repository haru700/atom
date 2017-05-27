<?php
require_once("/Users/haru/php/pear/Calendar-0.5.5/Month/Weekdays.php");
require_once("/Users/haru/php/pear/Date_Holidays-0.21.8/Date/Holidays.php");
$filename = "/Users/haru/php/pear/Date_Holidays_Japan-0.1.3/lang/Japan/ja_JP.xml";

// 年度をコンスと楽に指定して日本の祝日を取得
$dh = Date_Holydays::factory('Japan', date('Y'), 'ja_JP');
$dh->addTranslationFile($filename, 'ja_JP');

// 日付をキーとして「祝日の配列」を生成
$holidays = [];

// 年月を指定して日曜日から始まる付きカレンダーを取得 0 日曜日 6: 土曜日
$month = new Calendar_Month_Weekdays(date("Y"), date("m"), 0);

$month->build();
var_dump('=================='); var_dump('$month'); var_dump($month); var_dump('==================');

echo '<table width="350" border="1" cellspacint="0" style="font:12px;background-color: #00f;"><thead><tr>';

  echo '<th style="color;ff0000;">日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th style="color:0000ff">土</th>';

  // 月の日付でループ
  while($day = $month->fetch() ){
    // 週の枠に前月/翌月の日付が入ることがあるので表示の前に判定
    $dayStr = ($day->isEmpty() ) ? '&nbsp;' : $day->thisDay();

    if($day->isFirst() ){
      // 週の最初(曜日)
      echo "<tr>";
        echo "<td style='color:#ff0000'>" . $dayStr . "</td>";
    }else if($day->isLast() ){
      // 週の最後(土曜)
        echo "<td style='color:#0000ff'>" . $dayStr . "</td>";
      echo "</tr>";
    }else{
        echo "<td>" . $dayStr . "</td>";
    }
  }

echo '</table>';
