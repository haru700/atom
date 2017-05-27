<?php
require_once('/Users/haru/php/pkg/minify/PHP-Minify-Lib/Minify/Loader.php');
Minify_Loader::register();

$js = file_get_contents('./resources/index.js');
var_dump('=================='); var_dump('js'); var_dump($js); var_dump('==================');

// 「フラグ付きコメント」はのっこしてミニマイズ処理
$min1 = JSMin::minify($js);
$fp = fopen("../out/index.min.js", "w");
fputs($fp, $min1);
fclose($fp);

// フラグ付きコメントも削除のミニマイズ処理
