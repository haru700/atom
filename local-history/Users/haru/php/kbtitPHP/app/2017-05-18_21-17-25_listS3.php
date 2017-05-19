<?php
use aws¥s3¥S3Client;

$config = [
  'key' =>  'AKIAI7PR25TZBW6OGGWQ',
  'secret' => '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', 
];

$client = S3Client::factory($config);
$bucket = 'kbtit';
