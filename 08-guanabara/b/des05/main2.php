<?php
  $numberIsSubmitted = isset($_POST['n-submitted']);
  if ($numberIsSubmitted){
    $number = $_POST['numero'] ?? 0;
    $info = "<h1>Analisador de Número Real</h1>";
    $info .= "<p>Analisando o número ";
    $info .= number_format($number, 3, ",", ".")." informado pelo usuário:</p>";
    $info .= "<ul><li>A parte inteira do número é ";
    $info .= number_format($number, 0, ",", ".").".</li>";
    $info .= "<li>A parte fracionária do número é ";
    $info .= number_format(($number-intval($number)), 3, ",", ".").".</li></ul>";
    $info .= "<button onclick='javascript:history.go(-1)'>Voltar</button>";
  } else {
    include_once "main.php";
  }
?>