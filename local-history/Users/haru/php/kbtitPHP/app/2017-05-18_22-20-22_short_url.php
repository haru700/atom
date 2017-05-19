<?php
// 「OAuth用に修正したbitly.php」(設定)を読む
require_once('/Users/haru/php/pkg/bitly/bitly.php');

// 短縮URLを取得する
$result1 = bitly_v3_shorten('http://www.coltware.com/');
