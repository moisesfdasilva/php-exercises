<?php
  $bmiIsSubmitted = isset( $_POST['bmi-submitted'] );
  if ( $bmiIsSubmitted ){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $info = showBmiResponse( $height, $weight );
  } else {
    include_once "bmiform.php";
  }

  function showBmiResponse( int $height, int $weight ) : string {
    $answer = $height * $weight;
    $response = "<p>Your Bmi is $answer</p>";
    return $response;
  }
?>