<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Controle de Tarefas</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div>
        Quantidade total de tarefas: <?= Tarefa::getContador() ?>
    </div>
    <?php foreach ($usuarios as $u): ?>
        <h2>Tarefas de <?= $u->getNome() ?></h2>
        <table>
            <thead>
                <tr>
                    <th>Status</th>
                    <th>Título</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($u->listarTarefas() as $t): ?>
                    <tr>
                        <td><?= implode("<br>", $t->getIcons()) ?></td>
                        <td><?= $t->getTitulo() ?></td>
                        <td><?= $t->getDescricao() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
</body>
</html>
