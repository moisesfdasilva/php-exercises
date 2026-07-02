<?php

$tarefas = ["Lavar a louça", "Estudar PHP", "Fazer exercícios"];

array_push($tarefas, "Arrumar a mesa");
array_unshift($tarefas, "Tomar café");

//sort($tarefas); return void
$tarefasInvertidas = array_reverse($tarefas);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Notas do Aluno</title>
</head>
<body>
    <ul>
        <?php
            foreach ($tarefas as $t) {
                echo "<li>{$t}</li>";
            }
        ?>
    </ul>
    <ul>
        <?php
            foreach ($tarefasInvertidas as $t) {
                echo "<li>{$t}</li>";
            }
        ?>
    </ul>
    <?php
        if (in_array("Arrumar a mesa", $tarefas)) {
            echo "<p>Vá agora arrumar a mesa</p>";
        }

        $index = array_search("Estudar PHP", $tarefas);
        echo "<p>Índice: {$index}</p>";

        $index = array_search("Desmontar a porta do carro", $tarefas);
        echo "<p>Índice: {$index}</p>";
    ?>
</body>
</html>