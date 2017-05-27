<?php
// ライブラリ読み込み
require_once("/Users/haru/php/composerTest/vendor/autoload.php");

// タイ無ゾーン
date_default_timezone_set('Asia/Tokyo');

// 名前空間
use Carbon\Carbon; 

printf("Now: %s <br />", Carbon::now() );
