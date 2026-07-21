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
</body>
</html>