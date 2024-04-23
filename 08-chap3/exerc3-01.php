<?php
  // data type
  $valueString = "Something";
  print "My string is: ".$valueString;
  print "<br>";

  $valueIntegerA = 123;
  $valueIntegerB = 456;
  $sumInteger = $valueIntegerA + $valueIntegerB;
  print "My sum of integer is: ".$sumInteger;
  print "<br>";

  $valueFloatA = 123.123;
  $valueFloatB = 456.456;
  $sumFloat = $valueFloatA + $valueFloatB;
  print "My sum of float is: ".$sumFloat;
  print "<br>";

  $sumIntegerAndFloat = $valueIntegerA + $valueFloatA;
  print "My sum of integer and float is: ".$sumIntegerAndFloat;
  print "<br>";

  $concatenation = "Text number one "."Text number two.";
  print "<h1> My concatenation is: ".$concatenation."</h1>";
  print "<br>";

  $valueBoolA = true;
  $valueBoolB = false;
  print "My boolean 'a' is: ".$valueBoolA;
  print "<br>";
  print "My boolean 'b' is: ".$valueBoolB;
  print "<br>";
?>