<?php

ini_set('include_path', ini_get('include_path').PATH_SEPARORPATH_SEPARATOR."./google-api-php-client/src");
require_once ('Google/Client.php');
session_start();

$client = new Google_client();
$client->setApplicationName("PHP Mook");
$client->setClientId("317125129650-220q83jq4ekr1sspieosrerg3e01o171.apps.googleusercontent.com");
$client->setClientSecret("kWu6dJQRJtsLWUBlxak290kG");
$client->setRedirectUri("http://foo.com/oauth2callback");
$client->setDeveloperKey("AIzaSyBY3pgqQMrYdKI5c_Vyou9zP_mVhgV_qs0");

require_once ('Google/Service/Calendar.php');
$client->addScope("https://www.googleapis.com/auth/calendar");

if(!isset($_SESSION['ACCESS_TOKEN'])  ){
  if(!isset($_GET['code'])  ){
    $authUrl = $client->createAuthUrl();
    print sprintf("<a href='%s'>Google認証へ進む</a>", $authUrl);
  }else{
    $client->authenticate($_GET['code']);
    $_SESSION['ACCESS_TOKEN'] = $client->getAccessToken();
    print "<div>認証しました</div>";
  }
}
if(isset($_SESSION['ACCESS_TOKEN'])  ){
  print("<a href='service.php'>サービス利用へ進む</a>");
}
