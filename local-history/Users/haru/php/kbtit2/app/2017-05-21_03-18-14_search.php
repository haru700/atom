<?php
require_once('/Users/haru/php/pear/Services_OpenSearch-0.2.0/OpenSearch.php');

//はてなキーワードのエンドポイント
$url = "http://search.hatena.ne.jp/osxml"

// 「エンドポイント」を指定して初期化処理
$os = new Services_OpenSearch($url);
var_dump('=================='); var_dump('os'); var_dump($os); var_dump('==================');

// キーワードを指定して検索を実行
