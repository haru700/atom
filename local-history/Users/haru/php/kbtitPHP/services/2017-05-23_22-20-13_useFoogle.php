<?php

function __autoload($className){
  // 渡されたクラス名を元にクラスファイルのフルパスを定義
  $path = __DIR__ . '/' . $className . '.php';
  var_dump('==================');
  var_dump('$path = ');
  var_dump($path); 
  var_dump('==================');
  require $path;
}
