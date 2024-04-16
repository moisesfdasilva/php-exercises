<!DOCTYPE html>
<html>
  <body>
    <form>Produto:<input type="text" name="produto">
      <button type="submit">Adicionar</button>
    </form>
    <h2>Listagem de Produtos</h2>
    <?php
      if(isset($_GET["produto"])) {
        if(isset($_SESSION["listaProds"]))
          $produtos = $_SESSION["listaProds"];
        else
          $produtos = array();
        array_push($produtos,$_GET["produto"]);
        foreach($produtos as $p)
          echo("<li>$p</li>");
        $_SESSION["listaProds"] = $produtos;
      }
    ?>
  </body>
</html>