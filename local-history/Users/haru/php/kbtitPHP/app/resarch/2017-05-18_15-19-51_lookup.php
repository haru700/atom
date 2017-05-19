<?php
// 初期設定
require_once('/Users/haru/php/kbtitPHP/pearArchivePkg/Services_Amazon-0.9.0/Services/Amazon.php');

$amazon = new Services_Amazon($config['key'], $config['secret'], $config['track_id']);
$amazon->setLcale('JP');