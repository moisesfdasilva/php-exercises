<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 6: Analisando uma divisão"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $valor1 = $_GET['v1'] ?? 0;
      $valor2 = $_GET['v2'] ?? 1;
    ?>
    <main>
      <h1>Anatomia de uma Divisão</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Dividendo</label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="v2">Divisor</label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <input type="submit" value="Analisar">
      </form>
    </main>
    <section>
      <h2>Estrutura da Divisão</h2>
      <?php
        echo "<p>Dividendo: $valor1</p>";
        echo "<p>Divisor: $valor2</p>";
        echo "<p>Resto: ".($valor1%$valor2)."</p>";
        echo "<p>Divisão: ".intdiv($valor1, $valor2)."</p>";
      ?>
    </section>
  </body>
</html>