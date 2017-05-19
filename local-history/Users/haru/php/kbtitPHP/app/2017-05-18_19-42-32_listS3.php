<?php
use aws¥s3¥Client;

$client = S3Client::factory($config);
var_dump('=================='); var_dump('client');
var_dump($client); var_dump('==================');
