<?php
require_once('/Users/haru/php/kbtit2/vendor/knplabs/github-api/lib/Github/Client.php');

$client = new Client();

// キーワードからのリポジトリを検索
$repo = $client->api('repo');
$repo instanceof GitHub¥Api¥Repo;
// キーワードは 'kbtit'
$repos = $repo->find('kbtit', [
  // 言語は 'php'
  'language' => 'php',
]);

$list = $repos['repositories'];
$coun = $count($list);
