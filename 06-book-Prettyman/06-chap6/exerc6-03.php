<?php
  class zeroException extends Exception {
    public function errorMessage() {
      $errorMessage = "Second Number cannot be " . $this->getMessage();
      return $errorMessage;
    }
  }
  try {
    if ($secondNumber == 0)
    { throw new zeroException("Zero"); }
    else
    { $result = $firstnumber / $secondnumber; }
    // other code with exceptions
  }
  catch(zeroException $e) {
    echo $e->errorMessage();
  }
  catch(Throwable $t) {
    Echo $t->getMessage();
  }
?>