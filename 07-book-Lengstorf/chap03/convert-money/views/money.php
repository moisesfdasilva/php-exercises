<?php
  $bmiIsSubmitted = isset($_POST['money-submitted']);
  if ($bmiIsSubmitted){
    $real = $_POST['real'];
    $money = $_POST['money'];
    $info .= showBmiResponse($real, $money);
  } else {
    include_once "views/moneyform.php";
  }
  function showBmiResponse(float|int $real, string $money) : string {
    $moneyArray = array(
      "dollar" => 5.15,
      "euro" => 5.54,
      "pesoar" => 0.0058,
      "pesouy" => 0.13,
      "rublo" => 0.056,
      "yuan" => 0.71,
    );
    $valueToConvert = $moneyArray["$money"];
    $valueConverted = $real / $valueToConvert;

    $response = "
      <div>
        <p>Convert $real to $money</p>
        <p>Your BMI is $valueConverted</p>
        <p><a href='index.php?page=money'>Convert again.</a></p>
      </div>";
    return $response;
  }
?>
