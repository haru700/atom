<?php

require_once ('/Users/haru/php/composerTest/vendor/autoload.php');
use Aws\S3\S3Client;

$client = S3Client::factory([
  'key' => 'foo',
  'secret' => 'bar',
]);

var_dump('=================='); 
var_dump('use'); 
var_dump($client); var_dump('==================');
