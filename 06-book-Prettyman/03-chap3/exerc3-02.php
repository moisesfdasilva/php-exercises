<?php
  // operations
  $myNum = 3;
  $responseA = 3;
  $responseA += $myNum;
  print "My operarion 'a' is: ".$responseA;
  print "<br>";

  $responseB = 3;
  $responseB -= $myNum;
  print "My operarion 'b' is: ".$responseB;
  print "<br>";

  $responseC = 3;
  $responseC *= $myNum;
  print "My operarion 'c' is: ".$responseC;
  print "<br>";

  $responseD = 3;
  $responseD /= $myNum;
  print "My operarion 'd' is: ".$responseD;
  print "<br>";

  $responseE = 3;
  $responseE %= $myNum;
  print "My operarion 'e' is: ".$responseE;
  print "<br>";

  $myNum = 3;
  $myNumB = 2;
  $responseF = $myNum ** $myNumB;
  print "My operarion 'f' is: ".$responseF;
  print "<br>";
?>