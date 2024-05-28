<?php
  // $number = rand(0, 100); Linear Congrential Gererator (1951)
  // $number = random_int(0, 100); Gera um núm aleatório criptograficamente seguro (lenta)
  $number = mt_rand(0, 100); // Mersenne Twister (1997)
  $page= "<!DOCTYPE html><html><head><title>";
  $page .= "Desafio 002: Sorteador de números";  
  $page .= "</title><meta http-equiv='Content-Type'
    content='text/html;charset=utf-8'/>";
  $page .= "</head><body>";
  $page .= "<h1>Trabalhando com números aleatórios</h1>";
  $page .= "<p>Gerando um número aleatório entre 0 e 100...</p>";
  $page .= "<p>O valor gerado foi <strong>$number</strong>.</p>";
  $page .= "<button onclick='javascript:document.location.reload()'>
    Gerar outro</button>";
  $page .= "</body></html>";
  echo $page;
?>