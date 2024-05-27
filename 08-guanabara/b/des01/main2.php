<?php
  $numberIsSubmitted = isset($_POST['n-submitted']);
  if ($numberIsSubmitted){
    $number = $_POST['numero'];
    $info = "<p>O número escolhido foi $number.</p>";
    $res = $number - 1;
    $info .= "<p>O seu antecessor é $res</p>.";
    $res = $number + 1;
    $info .= "<p>O seu sucessor é $res</p>.";
    $info .= "<p><a href='index.php?page=main'>Voltar.</a></p>";
  } else {
    include_once "main.php";
  }
?>