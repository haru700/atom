<?php

require_once ('/Users/haru/php/kbtitPHP/vendor/zend/gdata/library/Zend/Gdata.php');
// ZendGData¥HttpClientオブジェクトを生成
$client = new ZendGData¥HttpClient();
$client->setAdapter('Zend¥Http¥Client¥Adapter¥Socket');
var_dump($client);
$client->getAdapter();
