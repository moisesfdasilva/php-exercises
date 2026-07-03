<!DOCTYPE html>
<html>
<head>
    <title>Lista de Pessoas</title>
</head>
<body>
    <h1>Lista de Pessoas Cadastradas</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Nascimento</th>
                <th>Cpf</th>
                <th>Endereco</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>País</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pessoas as $p): ?>
                <tr>
                    <td><?= $p->nome; ?></td>
                    <td><?= $p->email; ?></td>
                    <td><?= $p->nascimento; ?></td>
                    <td><?= $p->cpf; ?></td>
                    <td><?= $p->endereco; ?></td>
                    <td><?= $p->cidade; ?></td>
                    <td><?= $p->estado; ?></td>
                    <td><?= $p->pais; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <ol>
        <?php foreach ($pessoas as $p): ?>
            <li><?= $p->apresentar(); ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>
