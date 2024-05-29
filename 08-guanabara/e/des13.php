<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 13: Caixa Eletrônico"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $valor1 = $_GET['v1'] ?? 0;
    ?>
    <main>
      <h1>Desafio 13: Caixa Eletrônico</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Qual valor você deseja sacar? (R$)* </label>
        <input type="number" name="v1" id="v1" step="5" required value="<?=$valor1?>">
        <p style="font-size: 0.6em;">
          *Notas disponíveis: R$200, R$100, R$50, R$20, R$10, R$5.
        </p>
        <input type="submit" value="Sacar">
      </form>
    </main>
    <section>
      <h2>Saque de R$<?=number_format($valor1, 2, ",", ".")?> realizado</h2>
      <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
      <ul>
        <?php
          $resto = $valor1;
          $nt200 = floor($resto / 200);
          $resto %= 200;
          $nt100 = floor($resto / 100);
          $resto %= 100;
          $nt50 = floor($resto / 50);
          $resto %= 50;
          $nt20 = floor($resto / 20);
          $resto %= 20;
          $nt10 = floor($resto / 10);
          $resto %= 10;
          $nt5 = floor($resto / 5);
          $resto %= 5;
          echo "<li><img src='img/200_front.jpg' width='220px'> x $nt200</li>";
          echo "<li><img src='img/100_front.jpg' width='220px'> x $nt100</li>";
          echo "<li><img src='img/50_front.jpg' width='220px'> x $nt50</li>";
          echo "<li><img src='img/20_front.jpg' width='220px'> x $nt20</li>";
          echo "<li><img src='img/10_front.jpg' width='220px'> x $nt10</li>";
          echo "<li><img src='img/5_front.jpg' width='220px'> x $nt5</li>";
        ?>
      </ul>
    </section>
  </body>
</html>