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
  
  Sample sample;

  @前提("^: Sampleクラスをnew$")
  public void _Sammpleクラスをnew() throws Throwable{
    sanple = new Sample();
  }
  
  @ならば("^: getNameは\"([^¥"]*)\"であるべき$")
  public void _getNameは_であるべき(String arg_name) throws Throwable{
    assertThat(sample.getName(), is(arg_name) );
  }
}
