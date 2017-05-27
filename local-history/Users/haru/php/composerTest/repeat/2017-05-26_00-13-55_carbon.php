<?php
// ライブラリ読み込み
require_once("/Users/haru/php/composerTest/vendor/autoload.php");

// タイ無ゾーン
date_default_timezone_set('Asia/Tokyo');

// 名前空間
use Carbon\Carbon;

// 現在時刻
printf("Now: %s <br />", Carbon::now() );

// 加減算
printf("tommorow: %s <br />", Carbon::now()->addDay() );
printf("lastWeek: %s <br />", Carbon::now()->subWeek() );

// フォーマット指定
Carbon::setToStringFormat('Ymd');
printf("Now: %s <br />", Carbon::now() );

// 引数指定
printf("add 3 months: %s <br />", Carbon::now()->addmonths(3) );
