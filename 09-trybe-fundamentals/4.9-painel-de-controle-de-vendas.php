<?php

$vendas = [
    ["produto" => "Mouse sem fio", "categoria" => "Acessórios", "preco" => 120.90, "quantidade" => 4],
    ["produto" => "Teclado mecânico", "categoria" => "Acessórios", "preco" => 250.00, "quantidade" => 2],
    ["produto" => "Notebook", "categoria" => "Computadores", "preco" => 3500.00, "quantidade" => 1],
    ["produto" => "Cadeira gamer", "categoria" => "Móveis", "preco" => 900.00, "quantidade" => 1],
    ["produto" => "Monitor 24'", "categoria" => "Periféricos", "preco" => 750.00, "quantidade" => 3],
    ["produto" => "Hub USB", "categoria" => "Acessórios", "preco" => 89.90, "quantidade" => 5]
];

$totalVendas = array_reduce($vendas, fn($acc, $p) => $acc + ($p["preco"] * $p["quantidade"]));
$totalVendas = number_format($totalVendas, 2, ",", ".");

$totalProdutos = array_reduce($vendas, fn($acc, $p) => $acc + $p["quantidade"]);

$mediaPrecos = array_reduce($vendas, fn($acc, $p) => $acc + $p["preco"]) / count($vendas);
$mediaPrecos = number_format($mediaPrecos, 2, ",", ".");

$maiorQtd = max(array_column($vendas, "quantidade"));
$indiceMaisVendido = array_search($maiorQtd, array_column($vendas, "quantidade"));

$acessorios = array_filter($vendas, fn($v) => $v["categoria"] === "Acessórios");
$prodAcimaDe100 = array_filter($vendas, fn($v) => $v["preco"] > 100);

array_push($vendas,
    ["produto" => "PC Gamer Aquário Preto", "categoria" => "Computadores", "preco" => 7331.06, "quantidade" => 2]);
array_push($vendas,
    ["produto" => "Microfone Gamer", "categoria" => "Periféricos", "preco" => 107.90, "quantidade" => 3]);
array_unshift($vendas,
    ["produto" => "Nobreak 600VA", "categoria" => "Acessórios", "preco" => 399.99, "quantidade" => 2]);
array_unshift($vendas,
    ["produto" => "Fone de Ouvido Gamer", "categoria" => "Periféricos", "preco" => 139.99, "quantidade" => 8]);

$vendasInvertidas = array_reverse($vendas);
$vendasInvertidas = array_map(fn($v) => $v["produto"], $vendas);
$strVendasInv = implode("; ", $vendasInvertidas);

$produtoVendido = in_array("Mouse sem fio", array_column($vendas, "produto")) ? "Sim" : "Não";
$produtoNaoVendido = in_array("Placa de vídeo", array_column($vendas, "produto")) ? "Sim" : "Não";

$chaveExistente = array_key_exists("quantidade", $vendas[0]) ? "Sim" : "Não";
$chaveNaoExistente = array_key_exists("total da venda", $vendas[0]) ? "Sim" : "Não";

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Relatório de Vendas</title>
</head>
<body>
    <h1>Produtos Vendidos</h1>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Categoria</th>
                <th>Preço Unitário</th>
                <th>Quantidade</th>
                <th>Total da Venda</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendas as $venda): ?>
                <tr>
                    <td><?= $venda["produto"] ?></td>
                    <td><?= $venda["categoria"] ?></td>
                    <td>R$ <?= number_format($venda["preco"], 2, ",", ".") ?></td>
                    <td><?= $venda["quantidade"] ?></td>
                    <td>R$ <?= number_format($venda["preco"] * $venda["quantidade"], 2, ",", ".") ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <h2>Relatórios</h2>
    <p>Total geral de vendas: R$ <?= $totalVendas ?>;</p>
    <p>Total de produtos vendidos: <?= $totalProdutos ?>;</p>
    <p>Média de preços: R$ <?= $mediaPrecos ?>; e</p>
    <p>Produto mais vendido: <?= $vendas[$indiceMaisVendido]["produto"] ?>.</p>

    <h3>Relatório de produtos da categoria acessórios</h3>
    <ul>
        <?php foreach ($acessorios as $a): ?>
            <li><?= $a["produto"] ?></li>
        <?php endforeach; ?>
    </ul>
    <h3>Relatório de produtos com preço acima de R$100,00</h3>
    <ul>
        <?php foreach ($prodAcimaDe100 as $p): ?>
            <li><?= $p["produto"] ?></li>
        <?php endforeach; ?>
    </ul>
    <h3>Relatório de produtos com ordem inversa</h3>
    <p><?= $strVendasInv ?>.</p>
    <h3>Relatório de verificação</h3>
    <p>Venda de "Mouse sem fio": <?= $produtoVendido ?>.</p>
    <p>Venda de "Placa de vídeo": <?= $produtoNaoVendido ?>.</p>
    <p>Coluna "quantidade" na base de dados: <?= $chaveExistente ?>.</p>
    <p>Coluna "total da venda" na base de dados: <?= $chaveNaoExistente ?>.</p>
</body>
</html>
