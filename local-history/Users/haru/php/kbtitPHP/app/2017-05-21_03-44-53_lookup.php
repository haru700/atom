<?php
// ->lookup()メソッドの例
require_once('/Users/haru/php/pear/Services_TinyURL-0.1.2/Services/TinyURL.php');


try{
  // インスタンス生成
  $tiny = new Services_TinyURL();
  // 短縮されたURLを伸長
  $src = $tiny->lookup('http://www.amazon.co.jp/dp/4774162965/');

  echo $url; // 結果 http:tinyurl.com/ll4duyz
}
