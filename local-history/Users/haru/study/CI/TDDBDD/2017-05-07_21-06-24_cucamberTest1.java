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
