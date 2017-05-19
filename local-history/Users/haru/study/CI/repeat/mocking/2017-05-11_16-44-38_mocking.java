// DB上のユーザの年齢が18歳以上かどうかチェックする
// Authrizationクラスに対してユニットテストを書く

// 「DBアクセス実体名 = クラス名.()」を「モックオブジェクト化」
User mocked = mock(User.class);

// モックオブジェクトの戻り値を目的に合わせて設定
when(mocked.getAge()  ).thenReturn(16);


// テスト対象のオブジェクトに「モックオブジェクト」を注入してテスト開始
Authorization auth = new Authorization(mocked);


// 年齢チェックが失敗することを確認
assertThat(auth.proveAge(), is(false) );
