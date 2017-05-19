<?php
// ライブラリの読み込み
ini_set('include_path', ini_get('include_path').PATH_SEPARATOR."./google-api-php-client/src");
require_once ('../src/Google/Client.php');
require_once ('../src/Google/Service/Books.php');
session_start();

// APIに接続するための初期設置
$apiConfig['use_objects'] = true;
$client = new Google_Client();
$client->settApplicationName("PHP Mook");
// DIで利用するサービスのインスタンスを作成
$book = new Google_Service_Books($client);

// ISBNを指定して書籍情報を検索
$volumes = $book->volumes->getTotalItems();
if($ > 0){
  $items = $volumes->getItems();
  $book = $items[0];
  print("<div class='book'>");
    $info = $book->volumInfo;
    $url = $book->volumInfo->imageLinks->thubnail;
    print sprintf("<h1><img src='%s' stylse='float: left'>", $info->imageLinks->smallThubnail);
    print sprintf("<span>%s</span></h1>", htmlspecialchars($info->title)  );
    print sprintf("<div style='clear:both'>%s</div>", htmlspecialchars($imfo->description) );
  print("</div>");
}
