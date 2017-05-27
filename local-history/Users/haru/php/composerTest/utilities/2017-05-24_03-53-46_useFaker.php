
<table>
  <td>名前</td>
  <td>電話番号</td>
  <td>郵便番号</td>
  <td>住所</td>
  <td>メールアドレス</td>
  <td>勤務先</td>

<?php
// ライブラリ読み込みインスタンス生成
require_once ('/Users/haru/php/composerTest/vendor/autoload.php');

$faker = Faker\Factory::create('ja_JP');

for(i = 0; i < 5; i++){
  echo "<tr>"; 
    echo "<td>" . $faker->lastName . $faker->firstName "</td>";
  echo "</tr>";
}

var_dump('=================='); var_dump(''); var_dump($faker); var_dump('==================');

?>

</table>
