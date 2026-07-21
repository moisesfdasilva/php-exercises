<!DOCTYPE html>
<html>
<head>
    <title>Lista de Atividades</title>
</head>
<body>
    <h1>Lista de Atividades por Usuários</h1>
    <?php foreach ($usuarios as $u): ?>
        <h2>Usuário <?= $u->getNome() ?> (email <?= $u->getEmail() ?>)</h2>
        <table border="1">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Concluída</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($u->listarTarefas() as $t): ?>
                    <tr>
                        <td><?= $t->getTitulo(); ?></td>
                        <td><?= $t->getDescricao(); ?></td>
                        <td><?= $t->getStrConcluida(); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</body>
</html>
