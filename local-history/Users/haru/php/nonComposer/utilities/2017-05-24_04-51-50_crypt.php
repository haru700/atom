<?php
require_once ('/Users/haru/php/pear/Crypt_Blowfish-1.1.0RC2/Blowfish.php');

// 「暗号化」に利用するキー
$key = 'kbtit';
$text = 'イキスギィ!';

// 初期化処理
$blowfish = new Crypt_Blowfish($key);

var_dump('=================='); var_dump(''); var_dump($blowfish); var_dump('==================');

// テキストを暗号化する
$encrypt = $blowfish->encrypt($text);

var_dump('=================='); var_dump(''); var_dump($encrypt); var_dump('==================');

// 暗号化されたテキストを複合する
$decrypt = $blowfish->decrypt($encrypt);
var_dump('=================='); var_dump(''); var_dump($decrypte); var_dump('==================');
