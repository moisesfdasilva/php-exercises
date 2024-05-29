<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 12: Calculadora de tempo"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $valor1 = $_GET['v1'] ?? 0;
    ?>
    <main>
      <h1>Calculadora de Tempo</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Qual é o total de segundos </label>
        <input type="number" name="v1" id="v1" value="<?=$valor1?>">
        <input type="submit" value="Calcular">
      </form>
    </main>
    <section>
      <h2>Totalizando tudo</h2>
      <?php
        echo "<p>Analisando o valor que você digitou, <strong>";
        echo number_format($valor1, 0, ",", ".")." segundos</strong> ";
        echo "equivalem a um total de:</p><ul>";
        echo "<li>".intdiv($valor1, (60*60*24*7))." semanas;</li>";
        echo "<li>".intdiv(($valor1%(60*60*24*7)), (60*60*24))." dias;</li>";
        echo "<li>".intdiv(($valor1%(60*60*24)), (60*60))." horas;</li>";
        echo "<li>".intdiv(($valor1%(60*60)), 60)." minutos;</li>";
        echo "<li>".($valor1%60)." segundos.</li></ul>";
      ?>
    </section>
  </body>
</html>