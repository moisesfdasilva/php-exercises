<!DOCTYPE html>
<html>
  <body>
    <?php
      $nome = $_POST["n1"];
      $email = $_POST["e1"];
      echo("<h1>Bem-vindo $nome</h1>");
      echo("E-mail informado: $email");
    ?>
  </body>
</html>