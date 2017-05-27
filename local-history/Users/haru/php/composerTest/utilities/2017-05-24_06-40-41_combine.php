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
  'id' => 'kbtit',
  'content' => file_get_contents('./resources/index.js'),
]);

  $lines = explode("¥n", $js);
var_dump('=================='); var_dump('explode');
var_dump($lines[10]); var_dump('==================');


// 利用者が定義したミニマイズ方法を指定する
function user_jsmin($js){
  $lines = explode("¥n", $js);
  $fp = [];
}
