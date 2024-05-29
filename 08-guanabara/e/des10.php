<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 10: Calculo de Idade"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $atual = date("Y");
      $valor1 = $_GET['v1'] ?? '2000';
      $valor2 = $_GET['v2'] ?? $atual;
    ?>
    <main>
      <h1>Calculando a sua idade</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Em que ano você nasceu? </label>
        <input
          type="number"
          name="v1" id="v1"
          min="1900" max="<?=($valor2-1)?>"
          value="<?=$valor1?>"
        >
        <label for="v2">Quer saber sua idade em que ano? </label>
        <input
          type="number"
          name="v2" id="v2"
          min="1900" max="<?=$valor2?>"
          value="<?=$valor2?>">
        <input type="submit" value="Qual será a idade?">
      </form>
    </main>
    <section>
      <h2>Resultado</h2>
      <?php
        echo "<p>Quem nasceu em $valor1 vai ter ";
        echo ($valor2-$valor1)." em $valor2!</p>";
      ?>
    </section>
  </body>
</html>