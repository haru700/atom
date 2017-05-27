<?php
# @Author: haru
# @Date:   2017-05-26T11:36:25+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T11:41:56+09:00



require_once("Text/Diff.php");
require_once("Text/Diff/Rederer/context.php");
require_once("Text/Diff/Rederer/inline.php");

$file1 = file("file1.txt");
$file2 = file("file2.txt");

// 差分の取得
$diff = new Text_Diff('auto', [$file1, $file2]);

// 「inline形式」の出力
$renderer = new Text_Diff_Renderer_inline();

echo "<h5>Text_Diff_Renderer_inline</h5>";
echo sprintf("<pre>%s</pre>", $renderer->render($diff) );

// 「nified形式」の出力
$renderer2 = new Text_Diff_Renderer_unified();
echo "<h5>Text_Diff_Renderer_unified</h5>";
echo sprintf("<pre>%s</pre>", $renderer2->render($diff) );

var_dump('==================');
var_dump('');
var_dump();
var_dump('==================');
