<?php
  try {
    $result = $firstNumber /$secondNumber;
  }
  catch(Throwable $t) {
    echo "You entered zero for the second number.
      Your entry must be greater than zero";
  }
?>