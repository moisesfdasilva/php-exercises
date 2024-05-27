<?php
  $hexa = 0x1A;
  $bin = 0b1010;
  $octa = 010;
  $power = 3e2; // 3 * 10²
  $coercion = (int) "300";
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
          <h1>Teste de tipos primitivos, escalares</h1>
        </div>
        <div>
          <h3>hexadecimal -> 0x</h3>
          <p>$hexa</p>
        </div>
        <div>
          <h3>binário -> 0b</h3>
          <p>$bin</p>
        </div>
        <div>
          <h3>octal -> 0</h3>
          <p>$octa</p>
        </div>
        <div>
          <h3>potencia, exemplo: 3e2 = 3*10², return numero em float</h3>
          <p>$power</p>
        </div>
        <div>
          <h3>var_dump</h3>
          <p>v = 300; var_dump(v); return int(300)</p>
          <p>v = 45.2; var_dump(v); return float(45.2)</p>
          <p>v = true; var_dump(v); return bool(true)</p>
          <p>v = 'something'; var_dump(v); return strin(9) 'something'</p>
        </div>
        <div>
          <h3>coerção, conversão de variável forçada</h3>
          <p>v = '300'; vNew = (int) v; -> int(300)</p>
          <p>v = '300'; vNew = (float) v; -> float(300)</p>
          <p>$coercion</p>
        </div>
      </body>
    </html>";
  echo $page;
?>