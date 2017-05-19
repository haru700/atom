<?php
// 初期設定
require_once('/Users/haru/php/kbtitPHP/pearArchivePkg/Services_Amazon-0.9.0/Services/Amazon.php');

$config = [
  'key' =>  'AKIAI7PR25TZBW6OGGWQ',
  'secret' => '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',
  'track_id' => '',
];

$amazon = new Services_Amazon($config['key'], $config['secret'],        $config['track_id']);

// 日本のAmazonのサイトを検索対象に指定
$amazon->setLocale('JP');

// 商品の検索
$options = [
  'MinimumPrice' =>  '1500',
  'MaximumPrice' =>  '3000',
  'Keywords' => 'プレゼント',
  'Sort' => 'salesrank',
  'ResponseGroup' => 'ItemIds,ItemAttributes,Images'
];

$result = $amazon->$temSearch('Toys', $options);


// 見つかった商品を表示
if(! PEAR::isError($result)  ){
  print sprintf("<h4>%s件見つかりました</h4>", $result['TogalResults']  );
  $max = min($result['TotalResults'], 3);
}else{}