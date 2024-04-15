<!DOCTYPE html>
<html lang="pt-BR">
  <body>
    <table width="50%" border="1">
    <tr><td>Nome</td><td>Idade</td></tr>
    <?php
      $pessoas = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
      foreach ($pessoas as $nome => $idade) {
        echo("<tr><td>$nome</td><td>$idade</td></tr>");
      }
    ?>
    </table>
  </body>
</html>