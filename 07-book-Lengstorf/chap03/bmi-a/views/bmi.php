<?php
  $bmiIsSubmitted = isset($_POST['bmi-submitted']);
  if ($bmiIsSubmitted){
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $info .= showBmiResponse($height, $weight);
  } else {
    include_once "views/bmiform.php";
  }
  function showBmiResponse(float|int $height, float|int $weight) : string {
    $bmi = $weight / ($height ** 2);
    $response = "
      <div>
        <p>Height: $height m and Weight: $weight kg</p>
        <p>Your BMI is $bmi</p>
        <p><a href='index.php?page=bmi'>Calculate again.</a></p>
      </div>";
    return $response;
  }
?>
