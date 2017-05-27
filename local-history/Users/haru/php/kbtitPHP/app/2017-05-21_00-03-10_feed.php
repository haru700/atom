<?php
require_once('/Users/haru/php/pkg/feedcreator/feedcreator-1.7.2-ppt/include/feedcreator.class.php');


// フィードの基本情報を設定
$feed = new UniversalFeedCreator();

var_dump('=================='); var_dump('feed'); var_dump($feed); var_dump('==================');

// キャッシュを有効にするか
$feed->useCached();
$feed->encoding = 'UTF-8';
$feed->title = 'サーバサイド技術の学び舎(WINGプロジェクト)';
// サイトのURL
$feed->link = 'http://www.wings.msn.to/';

