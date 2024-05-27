<?php
  $page = "
    <!DOCTYPE html>
    <html lang='pt-br'>
      <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Tipos Primitivos em PHP</title>
      </head>
      <body>
        <div>
          <h1>Teste de tipos primitivos, compostos e especiais</h1>
        </div>
        <div>
          <h3>Especiais</h3>
          <p>null</p>
          <p>resource</p>
          <p>callabe</p>
          <p>mixed, representa todos os outros tipos primitivos</p>
        </div>
        <div>
          <h3>Compostos</h3>
          <p>array -> vet = [6, 2, 9, 3,5];</p>
          <p>object -> instância de classe</p>
        </div>
      </body>
    </html>";
  echo $page;
?>