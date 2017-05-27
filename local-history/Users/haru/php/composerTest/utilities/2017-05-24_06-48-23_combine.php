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


// 利用者が定義したミニマイズ方法を指定する
function user_jsmin($js){
  $lines = explode("¥n", $js);
  $out = [];

  foreach($lines as $line){
    // --DEBUG-- 文を消す
    $pos = strpos($line, "--DEBUG--");

    if($pos === false){
      $out = $line;
    }
  }

  return JSMinPlus::minify(join("¥n", $out) );
}

$list = new Minify_Source([
  'filepath' => './resource/index.js',
  'minifier' => 'user_jsmin',
]);

// 全てを合わせてミニマイズする
$all = Minify::combine($list);
var_dump('=================='); var_dump('all');var_dump($all); var_dump('==================');
