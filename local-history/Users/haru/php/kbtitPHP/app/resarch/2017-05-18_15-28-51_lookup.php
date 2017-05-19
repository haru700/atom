<?php
// 初期設定
require_once('/Users/haru/php/kbtitPHP/pearArchivePkg/Services_Amazon-0.9.0/Services/Amazon.php');

$amazon = new Services_Amazon($config['key'], $config['secret'], $config['track_id']);
$amazon->setLcale('JP');

// 商品情報取得
$options = [
  'ResponceGroup' =>  'ItemAttributes,Images',
];
$id = isset($_GET['id'])? $_GET['id'] : '4774156116';
$result = $amazon->ItemLookup($id, $options);

// 見つかった商品を表示
if(! PEAR::isError($result)  ){
  $item = $result['Item'][0];
}
