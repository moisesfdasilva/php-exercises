<?php

    require("5.5-usuario.php");

    $tarefaA = new Tarefa("Consertar a maçaneta do carro.", 
            "Desmontar a parte interna da porta do carro e ajustar 
            a fixação da maçaneta.", false);
    $tarefaB = new Tarefa("Consertar a seta da moto",
            "Desmontar a caixa ao lado da manopla esquerda, fazer limpeza
            e verificar os contatos elétricos", true);
    $tarefaC = new Tarefa("Prosseguir no curso de PHP",
            "Disponibilizar pelo menos cinquenta minutos por dia para
            realizar as atividades do curso.", true);
    $tarefaD = new Tarefa("Relatório de Modelagem Computacional", 
            "Realizar a atividade proposta de simulação de filas em regimes 
            MM1 e MMC.", true);
    $tarefaE = new Tarefa("Projeto de Redes", 
            "Realizar as atividades incubidas a mim e ajudar quem estiver
            com dificuldades em qualquer atividade.", false);
    $tarefaF = new Tarefa("Corridas diárias", 
            "Praticar corridas diárias pelo menos três vezes por semana.",
            true);
    
    $usuarioA = new Usuario("Ronaldo Fenômeno", "r9@gmail.com");
    $usuarioB = new Usuario("Ronaldo Gaúcho", "r11@gmail.com");
    $usuarioC = new Usuario("Rivaldo", "r10@gmail.com");

    $usuarioA->adicionarTarefa($tarefaA);
    $usuarioA->adicionarTarefa($tarefaB);
    $usuarioB->adicionarTarefa($tarefaC);
    $usuarioC->adicionarTarefa($tarefaD);
    $usuarioC->adicionarTarefa($tarefaE);
    $usuarioC->adicionarTarefa($tarefaF);
    
    $usuarios = [];

    array_push($usuarios, $usuarioA);
    array_push($usuarios, $usuarioB);
    array_push($usuarios, $usuarioC);
    
    require("5.5-index.view.php");

?>