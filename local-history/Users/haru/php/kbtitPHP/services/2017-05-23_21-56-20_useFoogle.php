<?php


spl_autoload_register(function ($className){
  $path = __DIR__. '/' . $className . '.php';
  var_dump('==================');
  var_dump('$path =  ');
  var_dump($path);
  var_dump('==================');

$className = 'Foo';
spl_autoload_register();
