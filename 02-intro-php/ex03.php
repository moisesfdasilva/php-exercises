<!DOCTYPE html>
<html lang="pt-BR">
  <body>
    <form>
      <input type="number" name="n1"> <input type="number" name="n2">
      <button type="submit">somar</button>
    </form>
    <?php
      function somar($a, $b) {
        return $a + $b;
      }
      if($_GET) {
        $x = (int) $_GET["n1"]; $y = (int) $_GET["n2"]; $i = somar($x,$y);
        echo("<h3>$x + $y = $i</h3>");
      }
    ?>
  </body>
</html>