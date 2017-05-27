<?php
require_once('/Users/haru/php/composerTest/vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php');

// デフォルト設定でHTMLprifierを利用
$config = HTMLPurifier_Config::createDefault();

$pur = new HTMLPurifier($config);
var_dump('=================='); var_dump(''); var_dump($pur); var_dump('==================');
// dirty.htmlから危険なタグ、属性を除去
purint
