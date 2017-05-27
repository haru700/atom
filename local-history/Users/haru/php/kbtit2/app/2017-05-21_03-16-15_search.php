<?php
require_once('/Users/haru/php/kbtit2/app/search.php');

$url = "http://search.hatena.ne.jp/osxml"

// 「エンドポイント」を指定して初期化処理
$os = new Services_OpenSearch($url);
