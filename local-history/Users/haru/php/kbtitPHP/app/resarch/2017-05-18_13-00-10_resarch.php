<?php

class Hybrid_Auth
{
  public static $version = "2.2.2";
  public static $config = array();
  public static $store = NULL;
  public static $error = NULL;
  public static $logger = NULL;

  public function __construct($config) {
    Hybrid_Auth::initialize($config);
  }

  /* @param $ @return */
  public static function initialize($config){
    if(!is_array($config) ! file_exists($config) ){
      throw new Exeption("Hybritauth config does not exist on the given path." 1);
    }

    if(!is_array($config) && ! file_exists($config) ){
      throw new Exception("Hybriauth config does not exist on the given path", 1);
    }

    if(!is_array($config) ){
      $config = include $config;

      $['path_base'] = realpath(dirname(__FILE__) )."/";
      var_dump($conf);
    }
  }
}
