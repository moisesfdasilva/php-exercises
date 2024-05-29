<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <title>"Superglobais"</title>
    <meta http-equiv='Content-Type'content='text/html;charset=utf-8'/>
  </head>
  <body>
    <main>
      <pre>
        <?php
          // https://www.youtube.com/watch?v=TuNj2zXQuOw&list=PLHz_AreHm4dlFPrCXCmd5g92860x_Pbr_&index=35
          // 
          setcookie("dia-da-semana","Terça", time() + 3600);

          session_start();
          $_SESSION["teste"] = "FUNCIONOU!";

          // Superglobais
          // $_GET - gera array associativo com todas a variáveis passadas como
          // parâmetro através de uma url.
          // $_POST - pega dados de um formulário passados pelo método post.
          // $_REQUEST - junta um pouco de get e post
          // colocar na url(query string): ...?nome=Guanabara&idade=45
          // cookies são pequenas variáveis guardadas dentro do navegador
          // $_COOKIE - cria um array com os cookies armazenados na minha aplicação
          // $_FILES - pega os dados de upload de arquivos
          // $_SESSION - permite que variáveis de seção não sejam perdidas nas páginas
          // $_ENV - variáveis de ambiente do servidor
          // $_SERVER - mostra várias informações como ip, url atual...
          // $GLOBALS - mostra os dados de todas as outras superglobais

          echo "<h1>Superglobal GET</h1>";
          var_dump($_GET);

          echo "<h1>Superglobal POST</h1>";
          var_dump($_POST);

          echo "<h1>Superglobal REQUEST</h1>";
          var_dump($_REQUEST);

          echo "<h1>Superglobal COOKIE</h1>";
          var_dump($_COOKIE);

          echo "<h1>Superglobal SESSION</h1>";
          var_dump($_SESSION);

          echo "<h1>Superglobal ENV</h1>";
          var_dump($_ENV);

          echo "<h1>Superglobal SERVER</h1>";
          var_dump($_SERVER);

          echo "<h1>Superglobal GLOBALS</h1>";
          var_dump($GLOBALS);
        ?>
      </pre>
    </main>
  </body>
</html>