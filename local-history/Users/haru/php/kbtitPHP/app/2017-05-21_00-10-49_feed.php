<?php
require_once('/Users/haru/php/pkg/feedcreator/feedcreator-1.7.2-ppt/include/feedcreator.class.php');


// フィードの基本情報を設定
$feed = new UniversalFeedCreator();


// キャッシュを有効にするか
$feed->useCached();
$feed->encoding = 'UTF-8';
$feed->title = 'サーバサイド技術の学び舎(WINGプロジェクト)';
// サイトのURL
$feed->link = 'http://www.wings.msn.to/';
// 「フィードの」URL
$feed->link = 'http://www.wings.msn.to/contents/rss.php';
$feed->description = 'プログラミングに関する最新記事を提供';

// フィードの「ロゴ情報」を設定
$img = new FeedImage();
$img->title = 'WINGSプロジェクト';
$img->url = 'http://www.wings.msn.to/image/wings.jpg';
$img->link = 'http://www.wings.msn.to/';
$img->description = 'WINGSプロジェクトはIT系書籍/記事の執筆プロジェクトです';

$feed->image = $img;
    var_dump('=================='); var_dump('feed'); var_dump($feed); var_dump('==================');

// articlesテーブルから最新記事10県を取得&列挙
try{
  $db = new PDO('mysql:dbname=phpmook;host=127.0.0.1;charset=utf8',
    'mookusr', 'mookpass');

}catch(PDOException $e){

}
