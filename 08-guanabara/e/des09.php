<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 9: Médias Aritméticas"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $valor1 = $_GET['v1'] ?? 0;
      $peso1 = $_GET['p1'] ?? 0;
      $valor2 = $_GET['v2'] ?? 0;
      $peso2 = $_GET['p2'] ?? 0;
    ?>
    <main>
      <h1>Médias Aritméticas</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">1º Valor </label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <label for="p1">1º Peso </label>
        <input type="number" name="p1" id="p1" value="<?=$peso1?>">
        <label for="v2">2º Valor </label>
        <input type="number" name="v2" id="v2" value="<?=$valor2?>">
        <label for="p2">2º Peso </label>
        <input type="number" name="p2" id="p2" value="<?=$peso2?>">
        <input type="submit" value="Calcular as Médias">
      </form>
    </main>
    <section>
      <h2>Cálculo das Médias</h2>
      <?php
        $meds = ($valor1+$valor2)/2;
        $medp = (($valor1*$peso1)+($valor2*$peso2))/($peso1+$peso2);
        echo "<p>Analisando os valores $valor1 e $valor2:</p>";
        echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre ";
        echo "os valores é igual a ".number_format($meds, 2, ",", ".").".</li>";
        echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos ";
        echo "$peso1 e $peso2 é igual a ";
        echo number_format($medp, 2, ",", ".").".</li></ul>";
      ?>
    </section>
  </body>
</html>