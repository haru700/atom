<?php

use ZendGData;
// ZendGData¥HttpClientオブジェクトを生成
$client = new ZendGData¥HttpClient();
$client->setAdapter('Zend¥Http¥Client¥Adapter¥Socket');
var_dump($client);
$client->getAdapter();
