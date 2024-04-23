<?php
  // Functions
  function display_something() {
    print "Something!";
  }
  display_something();

  function display_hello($value) {
    print $value;
  }
  display_hello("Hello");

  function display_names($first_name, $last_name = "none") {
    print "Your first name is $first_name";
    if ($last_name != "none") {
      print "Your last name is $last_name";
    }
  }
  display_names("James");
  display_names("Jakie", "Jones");

  function addtwo($first_value, $second_value) {
    $result = $first_value + $second_value;
    return $result;
  }
  print addtwo(12, 14);

  declare(strict_types=1);
  function addtwoB( int $first_value, int $second_value) : int {
    $result = $first_value + $second_value;
    return $result;
  }
  print addtwoB(12, 14);
?>