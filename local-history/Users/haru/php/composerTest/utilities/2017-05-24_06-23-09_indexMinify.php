<?php
require_once('/Users/haru/php/pkg/minify/PHP-Minify-Lib/Minify/Loader.php');
Minify_Loader::register();

$js = file_get_contents('./resources/index.js');

// 「フラグ付きコメント」はのっこしてミニマイズ処理
$min1 = JSMin::minify($js);
$fp = fopen("./out/index.min.js", "w");
fputs($fp, $min1);
fclose($fp);
var_dump('=================='); var_dump('min'); var_dump($min1); var_dump('==================');

// フラグ付きコメントも削除のミニマイズ処理
