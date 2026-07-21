<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Formulário de Contato</title>
</head>
<link rel="stylesheet" href=<?=$style_link?>>
<body>

    <section>
        <h2>Formulário de Contato</h2>
        <form action="processa.php" method="POST">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required><br><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br><br>

            <label for="mensagem">Mensagem:</label><br>
            <textarea id="mensagem" name="mensagem" rows="4" required></textarea><br><br>
            
            <button type="submit">Enviar</button>
        </form>
        <form action="" method="POST">
            <label for="tema">Tema:</label><br>
            <button type="submit" name="tema" value=<?= $btnTema ?>>
                <?= $btnTema ?>
            </button>
        </form>
    </section>

<?php include_once 'footer.view.php'; ?>

</body>
</html>