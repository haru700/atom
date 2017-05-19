public class SampleTest{
  @Test
  public final void testSamplegetNameIsTakafumi(){
    Sample sample = new Sample();
    assertThat(sample.getName(), is("Takafumi") );
  }
}　