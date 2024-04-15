<!DOCTYPE html>
<html lang="pt-BR">
  <body>
    <?php
      $nomes = array("Ana", "Carlos", "Maria", "Luiz");
      echo("<ul>");
      foreach ($nomes as $valor) {
        echo("<li>$valor</li>");
      }
      echo("</ul>");
    ?>
  </body>
</html>