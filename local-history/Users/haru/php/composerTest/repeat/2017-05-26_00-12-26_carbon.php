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
