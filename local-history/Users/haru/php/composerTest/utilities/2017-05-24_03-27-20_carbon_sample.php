<?php
require_once ('/Users/haru/php/composerTest/vendor/autoload.php');

// タイムゾーン指定
date_default_timezone_set('Asia/Tokyo');

// 名前空間
use Carbon\Carbon;

// 現在時刻;
printf('Now: %s <br />', Carbon::now() );

// 加減算
printf('tomorrow: %s <br />', Carbon::now()->addDay() );
printf('lastWeek: %s <br />', Carbon::now()->subWeek() );

// フォーマット指定
Carbon::setToStringFormat('Y-m-d');
printf("Now: %s <br />", Carbon::now() );
