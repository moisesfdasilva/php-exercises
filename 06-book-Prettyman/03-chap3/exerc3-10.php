<?php
  // Loops
  for ($I = 1; $I <= 10; $I++) {
    print "$I times ";
  }
  print "<br>";

  $I = 1;
  while ($I <= 10) {
    print "$I times ";
    $I++;
  }
  print "<br>";

  $class_array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
  foreach($class_array as $value)
  {
    print "$value times ";
  }
?>
