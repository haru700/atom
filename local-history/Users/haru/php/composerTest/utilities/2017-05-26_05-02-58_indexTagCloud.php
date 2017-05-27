<?php
require_once("/Users/haru/php/pear/HTML_TagCloud-1.0.0/TagCloud.php");

$tag = new HTML_TagCloud();


// タグの作成
// $tag->addElement($name, $url, $count, $timestamp);
$tag->addElement("PHP", "http://www.php.net", 100, strtotime('today') );

var_dump('==================');
var_dump('tag');
var_dump($tag);
var_dump('==================');
