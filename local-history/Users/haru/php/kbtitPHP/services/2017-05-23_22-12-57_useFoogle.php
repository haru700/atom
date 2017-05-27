<?php

include('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php');


class Foo{}

print_r(get_declared_classes() );

$foo = new Foo();

$foo->func('hello');
