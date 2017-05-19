<?php
use Aws¥S3¥S3Client;

$client = S3Client::factory($config);
var_dump('=================='); var_dump('client');
var_dump($client); var_dump('==================');
