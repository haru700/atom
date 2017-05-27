<?php


spl_autoload_register(function ($className){
  $path = __DIR__. '/' . $className . '.php';
  var_dump('=================='); 
  var_dump('$path =  '); 
  var_dump($path); 
  var_dump('==================');
  
});
include('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php');

var_dump('=================='); var_dump(''); var_dump(require_once('/Users/haru/php/kbtitPHP/vendor/Foogle/foogle.php') ); var_dump('==================');

$foo = new Foo();

$foo->func('hello');
