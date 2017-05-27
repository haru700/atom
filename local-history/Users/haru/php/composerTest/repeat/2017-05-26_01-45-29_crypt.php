<?php
require_once("/Users/haru/php/pear/Crypt_Blowfish-1.1.0RC2/Blowfish.php");

// 暗号化に利用するキー
$key = 'foo';
$text = 'イキスギィ!';

// 初期化処理
$blowfish = new Crypt_Blowfish($key);

// テキストを暗号化する
$encrypt = $blowfish->encrypt($text);
echo $encrypt;
echo '<br />'

// 暗号化されたテキストを複合する
$decrypt = $blowfish->decrypt($encrypt);
echo $decrypt;
