<?php
require_once('/Users/haru/php/pear/netgeoip/Net_GeoIP-1.0.0/Net/GeoIP.php');

// DBを指定してインスタンスを生成
$geoip = Net_GeoIP::getInstance("GeoIp.dat");

var_dump('=================='); var_dump(''); var_dump($geoip); var_dump('==================');
