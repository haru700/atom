<?php

include('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php');

var_dump('=================='); var_dump(''); var_dump(require_once('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php') ); var_dump('==================');

$foo = new Foo();

$foo->func('hello');
