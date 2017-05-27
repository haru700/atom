<?php
require_once('/Users/haru/php/pkg/magpierss/magpierss-0.72/rss_fetch.inc');

// MagpieRssのパラメータを設定
// 出力文字コード
define('MAGPIE_OUTPUT', 'UTF-8');
// キャッシュを有効にするか
define('MAGPIE_CACHE_ON', TRUE);
// キャッシュの格納先
define('MAGPIE_CACHE_DIR', './cache');
// キャッシュの有効期限(秒)
define('MAGPIE_CACHE_AGE', 60 * 30);
// 取得タイムアウト(秒)
define('MAGPIE_FETCH_OUT', 15);

// 文字列をHTMLエスケープ&出力するh関数
function  h($str){
  print htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// フィードを取得
$feed = fetch_rss('http://www.wings.msn.to/contents/rss.php');
var_dump('=================='); var_dump('feed'); var_dump($feed); var_dump('==================');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    
  </body>
</html>
