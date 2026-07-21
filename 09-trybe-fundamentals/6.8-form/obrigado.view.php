<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Obrigado</title>
  <link rel="stylesheet" href=<?=$style_link?>>
</head>
<body>
  <h2>Obrigado, <?= $nome ?></h2>
  <p>Recebemos sua mensagem: "<?= $mensagem ?>"</p>
  
  <?php include_once 'footer.view.php'; ?>
</body>
</html>