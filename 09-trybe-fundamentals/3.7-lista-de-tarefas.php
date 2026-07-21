<?php

    $tarefas = [
        ["nome" => "Estudar PHP", "concluida" => false],
        ["nome" => "Passear com o cachorro", "concluida" => true],
        ["nome" => "Praticar exercícios", "concluida" => false]
    ];

    $totalTarefas = count($tarefas);

    function mostrarMenu(): void {
        echo "\n=== ROTINA DE ESTUDOS ===\n";
        echo "1. Ver tarefas\n";
        echo "2. Marcar tarefa como concluída\n";
        echo "3. Ver progresso\n";
        echo "0. Encerrar\n";
        echo "Escolha uma opção: ";
    }

    function mostrarTarefas(array $tarefas): void {
        foreach ($tarefas as $i => $t) {
            if ($t["concluida"] == true) {
                $status = "✅";
            } else {
                $status = "❌";
            }
            echo "{$i} - {$status} {$t['nome']}\n";
        }
    }

    function concluirTarefa(array &$tarefas, int $indice): void {
        if (!isset($tarefas[$indice])) {
            echo "Tarefa inválida.\n";
            return;
        }
        
        $statusAtual = $tarefas[$indice]["concluida"];
        if ($statusAtual) {
            echo "A tarefa já está concluída.\n";
        } else {
            $tarefas[$indice]["concluida"] = true;
            echo "Tarefa concluída com sucesso.\n";
        }
    }

    function verProgresso(array &$tarefas): void {
        $concluidas = 0;

        foreach ($tarefas as $t) {
            if ($t["concluida"]) {
                $concluidas++;
            }
        }

        global $totalTarefas;
        echo "Você tem {$concluidas} tarefas concluidas de {$totalTarefas}.\n";

        if ($concluidas == $totalTarefas) {
            echo "Parabéns, você concluiu todas as tarefas. Vamos tomar um café!.\n";
        }
    }

    do {
        mostrarMenu();
        $opcao = (int) readline();

        switch ($opcao) {
            case '1':
                mostrarTarefas($tarefas);
                break;
            case '2':
                mostrarTarefas($tarefas);
                echo "Digite o número da tarefa a ser concluída:";
                $indice = (int) readline();
                concluirTarefa($tarefas, $indice);
                break;
            case '3':
                verProgresso($tarefas);
                break;
            default:
                echo "Opção inválida!\n";
                break;

        }
    } while ($opcao != 0);
    echo "Tchau!\n";

?>