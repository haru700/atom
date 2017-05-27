<?php

include('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php');

var_dump('=================='); var_dump(''); var_dump(require_once('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php') ); var_dump('==================');

get_declared_classes();

$foo = new Foo();

$foo->func('hello');
