<?php
  $bmiIsSubmitted = isset( $_POST['bmi-submitted'] );
  if ( $bmiIsSubmitted ){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $info = showBmiResponse( $height, $weight );
  } else {
    include_once "views/newquizform.php";
  }

  function showBmiResponse( int $height, int $weight ) : string {
    $answer = $height * $weight;
    $response = "<p>Your Bmi is $answer</p>";
    $response .= "
      <p>
        <a href='indexnewquiz.php?page=newquiz'>Try quiz again?</a>
      </p>";
    return $response;
  }
?>