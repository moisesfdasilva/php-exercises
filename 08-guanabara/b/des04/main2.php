<?php
  $ini = date("m-d-Y", strtotime("-7 days"));
  $end = date("m-d-Y");
  $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/';
  $url .= 'CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?';
  $url .= '%40dataInicial=\''.$ini.'\'&%40dataFinalCotacao=\''.$end.'\'&%24format=json&';
  $url .= '%24orderby=dataHoraCotacao%20desc&%24top=1';
  $data = json_decode(file_get_contents($url),true);
  $cot = $data["value"][0]["cotacaoCompra"];

  $numberIsSubmitted = isset($_POST['n-submitted']);
  if ($numberIsSubmitted){
    $number = $_POST['numero'] ?? 0;
    $padrao = numfmt_create("pr_BR", NumberFormatter::CURRENCY);
    $dollar = 5.17;
    $info = "<h1>Conversor de Moedas</h1>";
    $info .= "<p>Seus ".numfmt_format_currency($padrao, $number, "BRL").
     " equivalem a ".numfmt_format_currency($padrao, ($number/$cot), "USD").".</p>";
    $info .= "<br>";
    $info .= "<button onclick='javascript:history.go(-1)'>Voltar</button>";
  } else {
    include_once "main.php";
  }
?>