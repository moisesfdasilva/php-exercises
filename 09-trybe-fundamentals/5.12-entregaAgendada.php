<?php

require_once "5.12-entrega.php";
require_once "5.12-cliente.php";
require_once "5.12-entregador.php";

class EntregaAgendada extends Entrega {
    private DateTime $dataEntrega;

    public function __construct(Cliente $cliente, Entregador $entregador,
            float $valor, DateTime $dataEntrega) {
        parent::__construct($cliente, $entregador, $valor);
        $this->dataEntrega = $dataEntrega;
    }

    public function getResumoEntrega(): string {
        $dia = $this->dataEntrega->format('d');
        $mes = $this->dataEntrega->format('m');
        $ano = $this->dataEntrega->format('y');

        $c = parent::getNomeDoCliente();
        $v = parent::getValor();

        return "Agendada | Data: $dia/$mes/$ano | Cliente: $c | R$ $v";
    }

}
    
?>