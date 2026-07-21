<?php
// Para rodar no a página no servidor
//  arquivo index.php:
//      $ php -S localhost:4000
// arquivo com um nome diferente de index.php:
//      $ php -S localhost:4000 -t 4.3-arrays-associativos.php
// para sair
// Ctrl + c

//Para liberar a porta que estava em uso:
//  identificar o PID
//      $ sudo lsof -i :4000
//  liberar a porta em uso:
//      $ sudo kill 27221
//  liberar a porta de forma brutal:
//      $ sudo kill -9 27221


//Array indexado:
$materias = ["Matemática", "História", "Geografia"];
$notas = [8.5, 7.2, 9.1];

//Array associativo:
$notasAssociativas = [
    "Matemática" => 8.5,
    "História" => 7,
    "Geografia" => 9
];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Notas do Aluno</title>
</head>
<body>
    <h2>Array Indexado</h2>
    <ul>
        <?php

            for ($i = 0; $i < count($materias); $i++) {
                echo "<li>{$materias[$i]}: {$notas[$i]}</li>";
            }

        ?>
    </ul>
    <h2>Array Associativo</h2>
    <ul>
        <?php

            foreach ($notasAssociativas as $materia => $nota) {
                echo "<li>{$materia}: {$nota}</li>";
            }

            if (array_key_exists("Matemática", $notasAssociativas)) {
                echo "<p>A nota de Matemática já saiu!</p>";
            }

            if (array_key_exists("Biologia", $notasAssociativas)) {
                echo "<p>A nota de Biologia não saiu!</p>";
            }

            print_r(array_keys($notasAssociativas));
            echo "<p>";
            foreach (array_keys($notasAssociativas) as $mat) {
                echo "$mat</br>";
            }
            echo "</p>";

            echo "<p>";
            foreach (array_values($notasAssociativas) as $not) {
                echo "$not</br>";
            }
            echo "</p>";

        ?>
    </ul>
</body>
</html>