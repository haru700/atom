<?php

class Foo{
  public function func($arg){
    echo $arg;
  }
}

$foo = new Foo();

$foo->func('hello');
