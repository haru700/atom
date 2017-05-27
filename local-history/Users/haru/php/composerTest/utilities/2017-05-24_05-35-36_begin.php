<?php
require_once('/Users/haru/php/composerTest/vendor/ezyang/htmlpurifier/library/HTMLPurifier.auto.php');

// デフォルト設定でHTMLprifierを利用
$config = HTMLPurifier_Config::createDefault();
$config->set('HTML.AllowedElements', array( 'a', 'ul', 'li', 'b' ,'script') );
var_dump('=================='); var_dump(''); var_dump($config); var_dump('==================');

$pur = new HTMLPurifier($config);
// dirty.htmlから危険なタグ、属性を除去
print $pur->purify(file_get_contents('./resources/dirty.html') );

