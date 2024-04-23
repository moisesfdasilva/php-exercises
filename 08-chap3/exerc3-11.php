<?php
  // Array merge
  $colors1 = array("red", "green");
  $colors2 = array("blue", "yellow");
  $result = array_merge($colors1, $colors2);
  print_r($result);
  print "<br>";

  $fords = ['falcon', 'mustang'];
  $cars = ['civic', 'smart', ...$fords, 'tuson'];
  var_dump($cars);
?>
