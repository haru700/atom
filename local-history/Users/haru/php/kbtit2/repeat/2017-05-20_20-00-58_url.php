<?php
// 「ダウンロードURL」の生成
$url1 = $client->getObjectUrl('mookphp', "sample/data1.txt");
print sprintf("<a href='%s'>%s</a>", $url1, $url1);
print "<br />";
