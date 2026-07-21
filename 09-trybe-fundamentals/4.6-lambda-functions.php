<?php

    $products = [
        ["product" => "Batata Baroa", "price" => 12.99, "type" => "legumes"],
        ["product" => "Cenoura", "price" => 3.99, "type" => "legumes"],
        ["product" => "Arroz", "price" => 28.99, "type" => "marcenaria"],
        ["product" => "Patinho moído", "price" => 19.99, "type" => "açougue"],
    ];

    $productsFiltered = array_filter($products, function($p) {
        return $p["type"] === "legumes";
    });

    $values = [10, 40, 38, 27, 100];
    $valuesMapped = array_map(fn($v) => $v * $v, $values);
    $sumValues = array_reduce($values, fn($acc, $v) => $acc + $v);
    $sumValuesSquared = array_reduce($values, fn($acc, $v) => $acc + ($v * $v));

?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <title>Produtos</title>
</head>
<body>
    <h2>Lista</h2>
    <ul>
        <?php
            foreach ($products as $p) {
                echo "<li>{$p['product']}: {$p['price']}</li>";
            }
        ?>
    </ul>
    <h2>Lista filtrada</h2>
    <ul>
        <?php
            foreach ($productsFiltered as $p) {
                echo "<li>{$p['product']}: {$p['price']}</li>";
            }
        ?>
    </ul>
    <h2>Array com map</h2>
    <ul>
        <?php
            foreach ($values as $v) {
                echo "<li>{$v}</li>";
            }
        ?>
    </ul>
    <ul>
        <?php
            foreach ($valuesMapped as $v) {
                echo "<li>{$v}</li>";
            }
        ?>
    </ul>
    <h2>Array com reduce</h2>
    <ul>
        <?php
            echo "<li>Soma dos valores: {$sumValues}</li>";
        ?>
    </ul>
    <ul>
        <?php
            echo "<li>Soma dos quadrados dos valores: {$sumValuesSquared}</li>";
        ?>
    </ul>
</body>
</html>