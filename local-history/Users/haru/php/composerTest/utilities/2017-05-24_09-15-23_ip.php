<?php
require_once('/Users/haru/php/pear/netgeoip/Net_GeoIP-1.0.0/Net/GeoIP.php');

// DBを指定してインスタンスを生成
$geoip = Net_GeoIP::getInstance("/Users/haru/php/pear/netgeoip/GeoIP.dat");

var_dump('=================='); var_dump(''); var_dump($_SERVER['REMOTE_ADDR']); var_dump('==================');


// 国名、国コードを出力
echo $geoip->lookupCountryName($_SERVER['REMOTE_ADDR']);
