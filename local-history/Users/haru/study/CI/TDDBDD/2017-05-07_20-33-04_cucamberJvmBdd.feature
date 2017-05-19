#language: ja
  フィーチャ: Sample機能
  シナリオ: SampleクラスのNameプロパティを確認
  前提: Sampleクラスをnew
  ならば: getNameは"Takafumi"であるべき

  次に空のテストクラスを以下のように定義します

import org.junit.runner.RunWith;
import cucumber.junit.Cucumber;

@RunWith(Cucumber.class)
@Cucumber.Options(format={"pretty"})
pubric class SampleTest{

}

  