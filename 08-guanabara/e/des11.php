<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Desafio 11: Reajustando Preços"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <?php
      $valor1 = $_GET['v1'] ?? 0;
      $valor2 = $_GET['v2'] ?? 0;
    ?>
    <main>
      <h1>Reajustador de Preços</h1>
      <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1">Preço do produto </label>
        <input type="number" name="v1" id="v1" step="0.01" value="<?=$valor1?>">
        <label for="v2">
          Qual será o percentual de reajuste?
          (<strong>
            <span id="p">?</span>
            %
          </strong>)
        </label>
        <input
          type="range"
          name="v2" id="v2"
          min="0" max="100" step="1"
          oninput="changeValue()"
          value="<?=$valor2?>"
        >
        <input type="submit" value="Reajustar">
      </form>
    </main>
    <section>
      <h2>Resultado do Reajuste</h2>
      <?php
        $valor3 = (($valor2/100)*$valor1) + $valor1;
        echo "<p>O produto que custava R\$ ". number_format($valor1, 2, ",", ".");
        echo ", com <strong>$valor2% de aumento</strong> vai passar a custar ";
        echo "<strong>".number_format($valor3, 2, ",", ".")."</strong> a partir de agora.</p>";
      ?>
    </section>
    <script>
      changeValue()
      function changeValue() {
        p.innerText = v2.value;
      }
    </script>
  </body>
</html>