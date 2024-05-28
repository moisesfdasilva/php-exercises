<?php
  $numberIsSubmitted = isset($_POST['n-submitted']);
  if ($numberIsSubmitted){
    $number = $_POST['numero'] ?? 0;
    $padrao = numfmt_create("pr_BR", NumberFormatter::CURRENCY);
    $dollar = 5.17;
    $info = "<h1>Conversor de Moedas</h1>";
    $info .= "<p>Seus ".numfmt_format_currency($padrao, $number, "BRL").
     " equivalem a ".numfmt_format_currency($padrao, ($number/$dollar), "USD").".</p>";
    $info .= "<br>";
    $info .= "<button onclick='javascript:history.go(-1)'>Voltar</button>";
  } else {
    include_once "main.php";
  }
  // Formatar números number_format($number, 2, ",", ".")
  // Formatação de moedas com internacionalização! -> biblioteca intl
  // as biblioteca intl fica desabilitada no XAMPP
  // $padrao = numfmt_create("pr_BR", NumberFormatter::CURRENCY);
  // numfmt_format_currency($padrao, $real, "BRL")
  // numfmt_format_currency($padrao, $dollar, "USD")
?>