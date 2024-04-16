<!DOCTYPE html>
<html>
  <body>
    <?php
      $nome = $_POST["n1"];
      $email = $_POST["e1"];
      echo("<h1>Bem-vindo $nome</h1>");
      $msg = "Olá $nome\nSeja bem-vindo a nossa loja.";
      $msg = wordwrap($msg,70);
      mail($email,"Apenas um exemplo",$msg);
      echo("E-mail enviado para $email");
    ?>
  </body>
</html>