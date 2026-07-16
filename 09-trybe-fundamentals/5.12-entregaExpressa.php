<?php

require_once "5.12-entrega.php";
require_once "5.12-cliente.php";
require_once "5.12-entregador.php";

class EntregaExpressa extends Entrega {

    public function __construct(Cliente $cliente, Entregador $entregador,
            float $valor) {
        parent::__construct($cliente, $entregador, $valor);
    }

    public function getResumoEntrega(): string {
        $c = parent::getNomeDoCliente();
        $e = parent::getNomeDoEntregador();
        $v = parent::getValor();

        return "Expressa | Cliente: $c | Entregador: $e | R$ $v";
    }

}
    
?>