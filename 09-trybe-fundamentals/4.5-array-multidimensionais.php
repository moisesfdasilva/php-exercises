<?php

    $turma = [
        [
            'nome' => 'Ana',
            'notas' => [9, 7.5, 9]
        ],
        [
            'nome' => 'Carlos',
            'notas' => [7, 8, 9.5]
        ],
        [
            'nome' => 'Beatriz',
            'notas' => [6, 7.5, 8]
        ]
    ];

    $materias = ["Matemática", "História", "Geografia"];

?>

<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <title>Notas do Aluno</title>
</head>
<body>
    <ul>
        <?php
            foreach ($turma as $estudante) {
                $media = array_sum($estudante["notas"]) / count($estudante["notas"]);
                echo "<li>{$estudante['nome']} - Média: {$media}</li>";

                echo "<ul>";
                foreach (array_combine($materias, $estudante["notas"]) as $m => $n) {
                    echo "<li>{$m}: {$n}</li>";
                }
                echo "</ul>";
            }
        ?>
    </ul>
</body>
</html>