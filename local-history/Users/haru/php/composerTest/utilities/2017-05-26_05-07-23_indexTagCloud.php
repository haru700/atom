<?php
require_once("/Users/haru/php/pear/HTML_TagCloud-1.0.0/TagCloud.php");

$tag = new HTML_TagCloud();


// タグの作成
// $tag->addElement($name, $url, $count, $timestamp);
$tag->addElement("PHP", "http://www.php.net", 100, strtotime('today') );
$tag->addElement("ビットコイン", "", 180, time() );
$tag->addElement("ビッグデータ", "", 80, strtotime('-1 day') );
$tag->addElement("オリンピック", "", 40, strtotime('-2 day') );
$tag->addElement("消費税", "", 80, strtotime('today') );
$tag->addElement("アベノミクス", "", 80, strtotime('today') );
$tag->addElement("おもてなし", "", 40, strtotime('today') );
$tag->addElement("ご当地キャラ", "", 40, strtotime('today') );

var_dump('==================');
var_dump('tag');
var_dump($tag);
var_dump('==================');

print $tag->buildAll();
