<?php
require_once ('vendor/autoload.php');

// タイムゾーン指定
date_default_timezone_set('Asia/Tokyo');

// 名前空間
use Carbon\Carbon;

// 現在時刻;
print ('Now: %s <br />', Carbon::now() );
