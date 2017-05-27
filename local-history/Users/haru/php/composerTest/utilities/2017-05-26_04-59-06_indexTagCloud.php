<?php
require_once("/Users/haru/php/pear/HTML_TagCloud-1.0.0/TagCloud.php");

$tag = new HTML_TagCloud();

var_dump('==================');
var_dump('tag');
var_dump($tag);
var_dump('==================');

// タグの作成
// $tag->addElement($name, $url, $count, $timestamp);
