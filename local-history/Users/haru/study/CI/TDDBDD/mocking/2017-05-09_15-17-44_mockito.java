// DB上のユーザの年齢が 18歳以上かどうかチェックする
// Authrizationクラスに対してユニットテストを各

// 「DBアクセスオブジェクト」を「モックオブジェクト化」
User mocked = mock(User.class);

// 「モックオブジェクトの戻り値」をテスト目的にあわせて設定
when(moched.getAge()  ).thenReturn(16);

// テスト対象のオブジェクトにモックオブジェクトを注入してテスト開始
Authorization auth = new Authorization(moked);

