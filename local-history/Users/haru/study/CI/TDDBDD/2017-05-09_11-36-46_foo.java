public class SampleTest{
  Sample sample;

  @前提("^: Sampleクラスをnew$")
  public void _Sampleクラスをnew() throws Throwable{
    assertThat(sample.getName(), is(arg_name) );
  }
}