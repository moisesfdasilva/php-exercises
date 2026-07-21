<?php

require_once "5.12-pessoa.php";
require_once "5.12-cliente.php";
require_once "5.12-entregador.php";
require_once "5.12-entrega.php";
require_once "5.12-entregaExpressa.php";
require_once "5.12-entregaAgendada.php";
require_once "5.12-iEntregavel.php";

$cliente = new Cliente(
    "Ed Motta",
    "ed-motta@mpb.com.br",
    "Avenida Presidente Vargas, 1100 - 13º andar"
);

$entregador = new Entregador(
    "Chico Buarque",
    "chico-buarque@mpb.com.br",
    "1558-6601"
);

$eExpressa = new EntregaExpressa($cliente, $entregador, 459.65);

$d = new DateTime("2026-07-15");
$eAgendada = new EntregaAgendada($cliente, $entregador, 551.99, $d);

function imprimirResumo(Entregavel $entrega): string {
    return $entrega->getResumoEntrega();
}

$eAgendada->concluirEntrega();

require_once "5.12-index.view.php";

?>
