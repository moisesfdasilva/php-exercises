<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      integrity="..."
      crossorigin="anonymous"
    >
  </head>
  <body class="container">
    <table class="table table-striped">
      <thead class="table-dark">
        <tr><td>Codigo</td><td>Nome</td><td>Quantidade</td></tr>
      </thead>
      <tbody>
        <?php
          $conexao = new mysqli("localhost","root","","loja");
          $consulta = $conexao->query("select * from produto");
          $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
          foreach($resultado as $linha)
            echo("<tr><td>".$linha['codigo']."</td><td>".$linha['nome']
            ."</td><td>".$linha['quantidade']."</td></tr>");
          $conexao->close();
        ?>
      </tbody>
    </table>
  </body>
</html>