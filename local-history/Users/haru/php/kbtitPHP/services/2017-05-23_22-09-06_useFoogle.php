<?php

include('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php');

var_dump('=================='); var_dump(''); var_dump(require_once('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php') ); var_dump('==================');

class Foo {
  public function func($arg){
    return $arg;
  }
}

get_declared_classes();

$foo = new Foo();

$foo->func('hello');
