<?php
  $numberIsSubmitted = isset($_POST['n-submitted']);
  if ($numberIsSubmitted){
    $number = $_POST['numero'];
    $info = "<p>O número escolhido foi $number.</p>";
    $info .= "<p>O seu antecessor é " . ($number - 1) . ".</p>";
    $info .= "<p>O seu sucessor é " . ($number + 1) . ".</p>";
    $info .= "<p><a href='index.php?page=main'>Voltar</a></p>";
  } else {
    include_once "main.php";
  }
?>