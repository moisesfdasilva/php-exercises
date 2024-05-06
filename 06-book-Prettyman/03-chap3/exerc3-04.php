<?php
  // Logical operators
  $a = 25; $b = 25; $c = 25; $d = 35;
  If ( $a == $b or $c == $d ) {
    print "Some or all of us are equal!";
  } else {
    print "We are not equal";
  }

  $a = 25; $b = 25; $c = 35; $d = 35;
  If ( $a == $b and $c == $d ) {
    print "All of us are equal!";
  } else {
    print "No one is equal";
  }

  // excusive or (xor)
  $a = 25; $b = 25; $c = 25; $d = 25;
  If ( $a == $b xor $c == $d ) {
    print "Everyone is equal!";
  } else {
    print "Someone is not equal";
  }

  $a = 25; $b = 25; $c = 25; $d = 25;
  If ( ! ($a == $b xor $c == $d ) ) {
    print "Everyone is equal!";
  } else {
    print "Someone is not equal";
  }

  $a = 36; $b = 36;
  print $a == $b ? "They are equal" : "They are not equal";

  $a = 36; $b = 24;
  // don't working
  // print $a <=> $b ? "They are equal" : "$a is greater than $b" : "$b is greater than $a";
?>