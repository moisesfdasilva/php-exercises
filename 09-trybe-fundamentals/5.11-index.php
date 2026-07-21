<?php

require_once "5.11-usuario.php";
require_once "5.11-tarefa.php";
require_once "5.11-tarefaPrazo.php";
require_once "5.11-tarefaRevisavel.php";
require_once "5.11-tarefaSimples.php";

$usuarios = [];

$u1 = new Usuario("Jorge Ben Jor", "jorge-ben-jor@mpb.com.br");

$t1 = new TarefaPrazo(
    "Estudar PHP",
    "Seção de Orientação a Objetos",
    new DateTime("2025-11-10")
);

$t2 = new TarefaSimples(
    "Trocar lâmpada",
    "Lâmpada fria do banheiro",
);

$usuarios[] = $u1;

$u1->adicionarTarefa($t1);
$u1->adicionarTarefa($t2);

$u2 = new Usuario("Ed Motta", "ed-motta@mpb.com.br");

$t3 = new TarefaRevisavel("Estudar C#", "Seção 5");
$t4 = new TarefaSimples("Lavar louça", "Não usar máquina de lavar louças");

$u2->adicionarTarefa($t3);
$u2->adicionarTarefa($t4);

$usuarios[] = $u2;

require_once "5.11-index.view.php";

?>
