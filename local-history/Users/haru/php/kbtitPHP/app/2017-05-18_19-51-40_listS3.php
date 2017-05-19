<?php
require_once('/Users/haru/php/kbtitPHP/vendor/aws/aws-sdk-php/src/Aws/S3/S3Client.php');

$client = S3Client::factory($config);
var_dump('=================='); var_dump('client');
var_dump($client); var_dump('==================');
