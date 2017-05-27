<?php
# @Author: haru
# @Date:   2017-05-26T11:36:25+09:00
# @Last modified by:   haru
# @Last modified time: 2017-05-26T11:38:58+09:00



require_once("Text/Diff.php");
require_once("Text/Diff/Rederer/context.php");
require_once("Text/Diff/Rederer/inline.php");

$file1 = file("file1.txt");
$file2 = file("file2.txt");

// 差分の取得
$diff = new Text_Diff('auto', [$file1, $file2]);

var_dump('==================');
var_dump('');
var_dump();
var_dump('==================');
