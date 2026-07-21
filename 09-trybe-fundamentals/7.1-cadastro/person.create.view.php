<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
        <?= $styleLink ?>
        <title>Criar de pessoa</title>
    </head>
    <body>
        <section>
            <form action="person.create.process.php" method="POST">
                <label for="person-nome">Nome</label>
                <input name="nome" type="text" id="person-nome" placeholder="Nome do usuário">

                <label for="person-cpf">CPF</label>
                <input name="cpf" type="text" id="person-cpf" placeholder="CPF">

                <label for="person-email">Email</label>
                <input name="email" type="text" id="person-email" placeholder="Email">

                <label for="person-senha">Senha</label>
                <input name="senha" type="text" id="person-senha" placeholder="Senha">

                <label for="person-nascimento">Nascimento</label>
                <input name="nascimento" type="text" id="person-nascimento" placeholder="Nascimento (ano-mês-dia)">

                <button>Salvar</button>
            </form>
        </section>
        <?php include_once 'footer.view.php'; ?>
    </body>
</html>