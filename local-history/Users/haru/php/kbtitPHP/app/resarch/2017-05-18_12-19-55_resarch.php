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
}
