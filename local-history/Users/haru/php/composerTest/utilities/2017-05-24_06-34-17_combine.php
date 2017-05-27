<?php
require_once('/Users/haru/php/pkg/minify/PHP-Minify-Lib/Minify/Loader.php');
Minify_Loader::register();

$js = file_get_contents('./resources/index.js');

$list = [];

// ファイルを配列に追加する
$list[] = new Minify_Source([
  'filepath' => './resources/index.js',
]);

// 「文字列」対象にする
$list[] = new Minify_Source([ 
  '' => ,
]);

// 利用者が定義したミニマイズ方法を指定する
function user_jsmin($js){}
