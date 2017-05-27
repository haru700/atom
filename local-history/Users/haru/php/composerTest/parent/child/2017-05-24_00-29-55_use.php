<?php
require_once ('/Users/haru/php/composerTest/parent/foo.php');
require_once ('/Users/haru/php/composerTest/vendor/aws/aws-sdk-php/src/Aws/S3/S3Client.php');

$foo = new Foo();
$foo->func('hello');

$client = new Client();
