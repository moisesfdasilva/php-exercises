<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <title>Website de Empresa</title>
  </head>
  <body>
    <header class="header">
      <img class="logo" src="imagens/logo1.png">
      <nav class="nav-top">
        <ul>
          <li><a href="paginaprincipal.html">Principal</a></li>
          <li><a href="paginasobre.html">Sobre</a></li>
          <li><a href="paginadeprodutos.php">Produtos</a></li>
          <li><a href="paginadenovidades.php">Novidades</a></li>
          <li><a href="paginadecontato.html">Contato</a></li>
        </ul>
      </nav>
    </header>
    <main class="main">
      <section class="main-section">
        <article class="card">
          <div class="text">
            <h2>RIO DE AVENTURAS TRILHAS</h2>
            <h4>Nossos Produtos:</h4>
            <p>
              Apresentamos abaixo a descrição dos nossos produtos, 
              com os respectivos valores e quantidade de vagas 
              disponíveis para os próximos 30 dias.
            </p>
          </div>
        </article>
        <?php
          $conexao = new mysqli("localhost","root","","empresa");
          $consulta = $conexao->query("select * from produtos");
          $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
          foreach($resultado as $linha)
            echo("<article class='card'><div class='text'><h3>"
              .$linha['id_prod']." - ".$linha['nome']."</h3><p>"
              ."Valor: ".$linha['valor'].".</p><p>"
              ."Quantidade de vagas disponíveis: "
              .$linha['qtdestoque'].".</p></div></article>"
            );
          $conexao->close();
        ?>
        <article class="recommendation">
          <div class="text">
            <h3>Garanta logo a sua vaga.</h3>
            <p>Junte-se a nós!!!</p>
          </div>
        </article>
      </section>
    </main>
    <footer class="footer">
      <p>Av. Olegário Maciel, 777 - Loja A - Barra da Tijuca</p>
      <p>CEP: 22621-200 | CNPJ: 12.585.556/0001-25</p>
    </footer>
  </body>
</html>