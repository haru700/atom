<?php

require_once('/Users/haru/php/kbtitPHP/vendor/autoload.php');
require_once('/Users/haru/php/repeat/vendor/pimple/pimple/src/Pimple/Container.php');
require_once('/Users/haru/php/repeat/vendor/vlucas/bulletphp/src/Bullet/App.php');



var_dump('=================='); var_dump('require');
var_dump(require_once('/Users/haru/php/repeat/vendor/vlucas/bulletphp/src/Bullet/App.php')); var_dump('==================');
// Bulletオブジェクトの生成
$app = new App();
