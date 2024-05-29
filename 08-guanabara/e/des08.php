<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 8: Raízes de um número"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $valor1 = $_GET['v1'] ?? 0;
    ?>
    <main>
      <h1>Informe um número</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Numero </label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <input type="submit" value="Calcular as Raízes">
      </form>
    </main>
    <section>
      <h2>Resultado Final</h2>
      <?php
        echo "<p>Analisando o número $valor1, temos:</p>";
        echo "<ul><li>A sua raíz quadrada é ".($valor1**(1/2)).";</li>";
        echo "<li>A sua raíz cúbica é ".($valor1**(1/3)).";</li></ul>";
      ?>
    </section>
  </body>
</html>