<?php
  // conditional
  $a = 25; $b = 36;
  if( $a == $b) {
    print "$b equals $a";
    print"<br>";
  }
  else {
    print "$b and $a are not equal";
    print"<br>";
  }

  $a = "a"; $b = "A";
  if( $a === $b) {
    print "$b equals $a";
    print"<br>";
  }
  else {
    print "$b and $a are not equal";
    print"<br>";
  }

  $a = 25; $b = 36;
  if( $a != $b) {
    print "$b and $a are not equal";
    print"<br>";
  }
  else {
    print "$b and $a are equal";
    print"<br>";
  }

  $a = "A"; $b = "a";
  if( $a !== $b) {
    print "$b and $a are not equal";
    print"<br>";
  }
  else {
    print "$b and $a are equal";
    print"<br>";
  }

  $a = 25.1; $b = 36;
  if( $a < $b) {
    print "$a is less than $b";
    print"<br>";
  }
  else {
    print "$b is greater than $a";
    print"<br>";
  }

  $a = 36; $b = 36;
  if( $a <= $b) {
    print "$a is less than or equal to $b";
    print"<br>";
  }
  else {
    print "$b is greater than $a";
    print"<br>";
  }

  $a = 25; $b = 36;
  if( $a > $b) {
    print "$a is greater than $b";
    print"<br>";
  }
  else {
    print "$b is greater than $a";
    print"<br>";
  }

  $a = 36; $b = 36;
  if( $a >= $b) {
    print "$a is greater than or equal to $b";
    print"<br>";
  }
  else {
    print "$b is greater than $a";
    print"<br>";
  }

  // rocket ship operator $a <=> $b, return -1, 0 or 1.
  // $a < $b, return -1
  // $a = $b, return 0
  // $a > $b, return 1
  $a = 36; $b = 36;
  $result = $a <=> $b;
  if( $result === 0) {
    print "Both are equal";
    print"<br>";
  } else if( $result === 1) {
    print "$a is greater than $b";
    print"<br>";
  } else {
    print "$b is greater than $a";
    print"<br>";
  }
?>