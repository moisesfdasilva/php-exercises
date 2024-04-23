<?php declare(strict_types=1);
  // function with restrict types
  declare(strict_types=1);
  function addtwoA(int $first_value, int $second_value) : int {
    $result = $first_value + $second_value;
    return $result;
  }
  print addtwoA(12, 14);
  
  function addtwoB(int | float $first_value, int | float $second_value) : int | float {
    $result = $first_value + $second_value;
    return $result;
  }
  print addtwoB(12.1, 14);
  //As of PHP 8, the current valid data types are:
  //array; bool; callable; int; float; null; object; resource; string.
?>
