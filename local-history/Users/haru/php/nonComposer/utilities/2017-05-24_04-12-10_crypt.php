<?php
require_once ('/Users/haru/php/pear/Crypt_Blowfish-1.1.0RC2/Blowfish.php');

// 「暗号化」に利用するキー
$key = 'kbtit';
$text = 'イキスギィ!';

// 初期化処理
$blowfish = new Crypt_Blowfish($key);
