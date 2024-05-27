<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Expressões e Funções Aritméticas</title>
  </head>
  <body>
    <div>
      <?php
        echo "<h2>Expressões Aritméticas:</h2>";
        $res = 5 + 2 / 2;
        echo "<p>O resultado é $res.</p>";
        $res = 50 / 2 + 3 ** 2;
        echo "<p>Esse resultado é $res.</p>";
        $res = 50 / (2 + 3) ** 2;
        echo "<p>Esse outro resultado é $res.</p>";
      ?>
    </div>
    <div>
      <?php
        echo "<h2>Funções Aritméticas</h2>";
        // abs() -> valor absoluto do número
        echo "<h3>abs()</h3>";
        $res = abs(500);
        echo "<p>O abs(500) é $res.</p>";
        $res = abs(-500);
        echo "<p>O abs(-500) é $res.</p>";

        // base_convert() -> valor absoluto do número
        echo "<h3>base_convert(number,frombase,tobase)</h3>";
        $res = base_convert(254, 10, 16);
        echo "<p>O base_convert(254, 10, 16) é $res.</p>";
        $res = base_convert(254, 10, 2);
        echo "<p>O base_convert(254, 10, 2) é $res.</p>";
        $res = base_convert(1011, 2, 10);
        echo "<p>O base_convert(1011, 2, 10) é $res.</p>";

        // ceil(), floor(), round() -> arredonda pra cima, baixo e aritimeticamente

        // hipot() -> calcula a hipotenusa

        // intdiv() -> o inteiro da divisão
        $res = intdiv(5, 2);
        echo "<p>O intdiv(5, 2) é $res.</p>";

        // min(), max() -> apresenta o mínimo ou máximo da sequência
        $res = min(5, 2);
        echo "<p>O min(5, 2) é $res.</p>";
        $res = max(5, 2);
        echo "<p>O max(5, 2) é $res.</p>";

        // pi() ou M_PI -> apresenta o valor de pi
        $res = pi();
        echo "<p>O pi() é $res.</p>";
        $res = M_PI;
        echo "<p>O M_PI é $res.</p>";

        // pow() -> apresenta a potência
        $res = pow(5, 2);
        echo "<p>O pow(5, 2) é $res.</p>";

        //sin(), cos(), tan() -> apresenta o valor de seno, cosseno e tangente

        // sqrt() -> apresenta a raíz quadrada
        $res = sqrt(81);
        echo "<p>O sqrt(81) é $res.</p>";
      ?>
    </div>
  </body>
</html>