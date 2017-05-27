<?php
require_once('/Users/haru/php/composerTest/vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php');

// デフォルト設定でHTMLprifierを利用
$config = HTMLPurifier_Config::createDefault();
var_dump('=================='); var_dump(''); var_dump($config); var_dump('==================');
