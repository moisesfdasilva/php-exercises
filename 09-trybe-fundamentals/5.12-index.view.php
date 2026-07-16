<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Entregas de Produtos</title>
</head>
<body>
    <div>
        <p><?= $cliente->getIdentificacao();?></p>
        <p><?= $entregador->getIdentificacao(); ?></p>
        <p><?= imprimirResumo($eExpressa); ?></p>
        <p><?= imprimirResumo($eAgendada); ?></p>
    </div>
</body>
</html>
