<!DOCTYPE html>
<html lang='pt-br'>
  <head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Operações Aritméticas</title>
  </head>
  <body>
  <div>
      <?php
        echo "<h2>Teste com Soma e ConcatenaçãoOperações Aritméticas:</h2>";
        $res = "2" + "2";
        echo "<p>O resultado de \"2\" + \"2\" é $res.</p>";
        $res = "2" . "2";
        echo "<p>O resultado de \"2\" . \"2\" é $res.</p>";
      ?>
    </div>
    <div>
      <?php
        $res = "5" + "2";
        echo "<p>O resultado de \"5\" + \"2\" é $res.</p>";
        $res = "5" - "2";
        echo "<p>O resultado de \"5\" - \"2\" é $res.</p>";
        $res = "5" * "2";
        echo "<p>O resultado de \"5\" * \"2\" é $res.</p>";
        $res = "5" / "2";
        echo "<p>O resultado de \"5\" / \"2\" é $res.</p>";
        $res = "5" % "2";
        echo "<p>O resultado de \"5\" % \"2\" é $res.</p>";
        $res = "5" ** "2";
        echo "<p>O resultado de \"5\" ** \"2\" é $res.</p>";
      ?>
    </div>
  </body>
</html>