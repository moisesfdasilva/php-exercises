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
        <title>Lista de pessoas</title>
    </head>
    <body>
        <section>
            <span>Olá, John.
                <a href="person.create.php">Nova pessoa</a> | Alterar Tema 
                <a href=<?= "index.php?style=" . $style ?>><?= $style ?></a> | 
                <a href="logout.php">Sair</a>
            </span></br></br>
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>CPF</th>
                        <th>Nascimento</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pessoas as $p): ?>
                        <?php if(isset($p->nome)): ?>
                            <tr>
                                <td><?= $p->nome ?></td>
                                <td><?= $p->email ?></td>
                                <td><?= $p->cpf ?></td>
                                <td><?= $p->getStrNascimento() ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
        <?php include_once 'footer.view.php'; ?>
    </body>
</html>