<?php
// ライブラリの読み込み
require_once('/Users/haru/php/kbtitPHP/src/Google/Client.php');
ini_set('memory_limit', '1000M');
require_once('/Users/haru/php/kbtitPHP/src/google-api-php-client-services/src/Google/Service/Calendar.php');
$apiConfig['use_objects'] = true;
$client = new Google_Client();
$client->setApplicationName("PHP Mook");

// APIキーの設定
// アクセストークンの設定
$client->setAccessToken('ya29.GltKBIfQ6s5tt-LGrGdH-skJOGPrw13SB-DiKJDrvXEv04wp9tcmoqpC8pHTSqhloX5lw1N6HWSPTPWiUVsgaA7OLU48aB05gw4CJq8YHQdROeGs6z2dHkpMAQv');
$cal = new Google_Service_Calendar($client);

// カレーンダー一覧を取得する
// Goo;e_sercice_Calendar_calendarList_Resource
$cal_list = $cal->calendarList;
$list = $cal_list->listCalendarList();

foreach($list as $item){
  $item instanceof Google_Service_Calendar_CalendarListEntity;
  print sprintf("<h3>%s</h3>", $item->summary);

  // 取得したカレンダー一覧から対象のカレンダーを選択する
  $cal_id = $item->id;
  $timeMax = "2014-03-03T00:00:00+09:00";
  $timeMin = "2014-03-03T00:00:00+09:00";
  $opts = [
    'timeMax' => $timeMax,
    'timeMin' => $timeMin,
    'orderBy' => 'startTime',
    'singleEvents' => true,
  ];


}
