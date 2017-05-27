<?php
require_once("/Users/haru/php/pear/Mail-1.4.1/Mail.php");
require_once("/Users/haru/php/pear/Mail_Mime-1.10.1/Mail/mime.php");


// メール本文を準備
$mime = new Mail_mime();
$mime->setHTMLBOdy('mai.dat', TRUE);

var_dump('==================');
var_dump('mime');
var_dump($mime);
var_dump('==================');

