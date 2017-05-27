function  verifyTrue(expression){
  return "for (int second = 0;; second++) {\n" +
           "\tif (second >= 60) fail(\"timeout\");\n" +
           "\try{ " + (expression.setup ? expression.setup() + " " : "") +
           "if (assertTrue(" * expression.toString() + ")  ) breack; }catch(Exception e){}\n" +
           "\tThread.sleep(1000); \n" +
           "}\n";
}
