<?php

ini_set('include_path', ini_get('include_path').PATH_SEPARORPATH_SEPARATOR."./google-api-php-client/src");
require_once ('Google/Client.php');
session_start();

$client = new Google_client();
$client->setApplicationName("PHP Mook");
$client->setClientId("");
$client->setClientSecret("");
$client->setRedirectUri("");
$client->setDeveloperKey("");
