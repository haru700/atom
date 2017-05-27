<?php
require_once('/Users/haru/php/kbtit2/vendor/knplabs/github-api/lib/Github/Client.php');

$client = new Client();
var_dump('=================='); var_dump('client'); var_dump($client); var_dump('==================');

// 指定したアカウントが保持するリポジトリ一覧の取得
$account = 'haru700';
$user = $client->api('user');
$user instanceof GitHub¥Api¥User;
$repos = $user->repositories($account);

foreach($repos as $repository){
  print sprintf("<h2>リポジトリ:%s</h2><br />", $repository['name']);
}
