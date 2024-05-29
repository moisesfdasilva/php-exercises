<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 7: Salário Mínimo"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $valor1 = $_GET['v1'] ?? 1412;
      $valor2 = 1412;
    ?>
    <main>
      <h1>Informe seu salário</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Salário(R$) </label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <p>Considerando o salário mínimo de R$ de <?=$valor2?></p>
        <input type="submit" value="Calcular">
      </form>
    </main>
    <section>
      <h2>Resultado Final</h2>
      <?php
        echo "<p>Quem recebe um salário de R\$ $valor1 ";
        echo "ganha <strong>".intdiv($valor1, $valor2)." salários mínimos ";
        echo "</strong> + ".($valor1%$valor2).".</p>";
      ?>
    </section>
  </body>
</html>