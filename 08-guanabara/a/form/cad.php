<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
  </head>
  <body>
    <headet>
      <h1>Resultado do Processamento</h1>
    </headet>
    <main>
      <?php
        // VARIÁVEIS GLOBAIS
        // $_GET -> quando usado o método get é formado um array com as chaves enviadas
        // var_dump($_GET) -> array(2) {["nome"]=> string(3) "abc" ...};
        // $_POST -> quando usado o método post é formado um array com as chaves enviadas
        // var_dump($_POST) -> array(0);
        // $_REQUEST -> é a junção dos métodos get e post, e ocupa mais memória
        // var_dump($_GET) -> array(2) {["nome"]=> string(3) "abc" ...};
        $nome = $_GET["nome"] ?? "sem nome";
        $sobrenome = $_GET["sobrenome"] ?? "sem sobrenome";
        echo "<p>É um prazer te conhecer, $nome $sobrenome! Esse é o meu site!</p>"
      ?>
      <p>
        <a href="javascript:history.go(-1)">
          Voltar à página anterior.
        </a>
      </p>
    </main>
  </body>
</html>