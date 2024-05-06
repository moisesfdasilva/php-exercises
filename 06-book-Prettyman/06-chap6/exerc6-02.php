<?php
  try {
    if ($secondNumber == 0)
    { throw new Exception("Zero Exception"); }
    else
    { $result = $firstnumber / $secondnumber; }
  }
  catch(Exception $e) {
    switch ($e->getMessage()) {
      case "Zero Exception":
        echo "The value of second number must be greater than zero";
        break;
      case "Some other exception":
        echo "You did something else wrong";
        break;
      }
    }
  catch(Throwable $t) {
    echo $t->getMessage();
  }
?>