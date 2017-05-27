<?php
require_once('/Users/haru/php/pkg/minify/PHP-Minify-Lib/Minify/Loader.php');
Minify_Loader::register();

$list = [];

// ファイルを配列に追加する
$list[] = new Minify_Source([ 
  'filepath' => './resources/index.js',  
]);
