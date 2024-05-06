<?php
  include "addtwo.php";
  print addtwo( 12, 14);
  print "<br>"

  try {
    print dividetwo(12, 14);
  }
  catch(zeroException $e) {
    print "Don’t try to divide by zero!";
  }
  catch(Throwable $t) {
    Print $t->getMessage();
  }
  finally {
    Print "This message is over.";
  }
?>