
for(int second =0;; second++){
  if(second >= 60) fail("timeout");

  try{
    if(assertTrue(selenium.isTextPresent("ID、パスワードを入力してください") )  ) break;
  }catch(Exception err){
    Thread.sleep(1000);
  }
}
