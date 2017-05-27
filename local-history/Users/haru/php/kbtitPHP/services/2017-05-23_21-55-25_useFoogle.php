<?php


spl_autoload_register(function ($className){
  $path = __DIR__. '/' . $className . '.php';
  var_dump('==================');
  var_dump('$path =  ');
  var_dump($path);
  var_dump('==================');

spl_autoload_register('foo');
