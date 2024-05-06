<?php declare(strict_types=1);
  require_once("runner.php");
  if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['gender']) &&
    isset($_POST['age']) && isset($_POST['tshirt_size']))
  {
    // FILTER_SANITIZE_STRING is deprecated in php 8.1
    (string) $name = filter_var($_POST['name'], FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH);
    (string) $address = filter_var($_POST['address'], FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH);
    (string) $gender = filter_var($_POST['gender'], FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH);
    (int) $age = filter_var($_POST['age'], FILTER_VALIDATE_INT);
    (string) $tshirt_size = filter_var($_POST['tshirt_size'], FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_HIGH);

    $new_runner = new Runner($name, $address, $gender, $age, $tshirt_size);
  }
  else
  {
    print "<p>Missing or invalid parameters. Please go back to the runner.
    html page to enter valid information.</p>";
    print "<a href='newrunner.html'>Runner Creation Page</a>";
}
?>