<?php

require_once('/Users/haru/php/kbtitPHP/vendor/autoload.php');
use Bullet¥App;


var_dump('=================='); var_dump('require');
var_dump(require_once('/Users/haru/php/repeat/vendor/vlucas/bulletphp/src/Bullet/App.php')); var_dump('==================');
// Bulletオブジェクトの生成
$app = new App();

// イベントの定義
$app->('/hello', function($request){
  return "Hello World";
});

// ルーティングの実行
echo $app->run(new Bullet¥Request() );
