<?php
  function errorHandler($severity, $message, $file, $line) {
    throw new errorException($message, 0, $severity, $file, $line);
  }
  class userException extends Exception { }
  set_error_handler('errorHandler');
  try {
    require_once("exerc6-04.php");
    $tester = new testerror();
    $tester->produceerror();
    echo "This line does not display";
    $tester->throwexception(); // will not execute if produceerror() is executed
    echo "This line does not display";
  }
  catch (errorException $e ){
    echo $e->getMessage();
  }
  catch (userException $e) {
    echo $e->getMessage();
  }
  catch (Throwable $t) {
    echo $t->getMessage();
  }
  echo "This line will display";
?>