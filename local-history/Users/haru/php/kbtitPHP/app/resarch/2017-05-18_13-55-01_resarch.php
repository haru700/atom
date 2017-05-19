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
      var_dump(serialize($config));
    }
  }

}

return
  [
    "base_url" => "http://localhost/",

    "Google" => [
      "enabled" => true,
      "keys" => [
        "id" => "",
        "secret" => "",  
      ],
    ],
  ];

public static function authenticate($providerId, $params = NULL){
  Hybrid_Logger::info("Enter Hybrid_Auth::authenticate($providerId)");


  // if user not connected to $provederId then try setup a new adapter and start the login process for this provider
  if(! Hybrid_Auth::strage()->get(
    "hauth_session.$providerId.is_logged_in"
    )
  ){
    Hybrid_Logger::info("Hybrid_Auth::authenticate($providerId), User not connected to provider. Try to authenticate..");

    $provider_adapter = Hybrid_Auth::setup($providerId, $params);
    $provider_adapter->login();

  }else{  
    Hybrid_Logger::info("Hybrid_Auth::authenticate($providerId), User is aleady connected to this provider. Return the adapter instance.");
    return Hybrid_Auth::getAdapter($providerId);
    
    
  }
    
}