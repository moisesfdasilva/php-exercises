<?php

require_once "5.12-iEntregavel.php";
require_once "5.12-cliente.php";
require_once "5.12-entregador.php";


trait LoggerTrait
{
    public function log(string $mensagem): void {
        $agora = time();
        $dataEHoraAtual = date('Y-m-d H:i:s', $agora);

        echo "[$dataEHoraAtual] $mensagem.";
    }
}


abstract class Entrega implements Entregavel {
    
    use LoggerTrait;

    private Cliente $cliente;
    private Entregador $entregador;
    private float $valor;
    private string $status;

    public function __construct(Cliente $cliente, Entregador $entregador,
            float $valor) {
        $this->cliente = $cliente;
        $this->entregador = $entregador;
        $this->valor = $valor;
        $this->status = "pendente";

        $nomeDoCliente = $cliente->getNome();
        $this->log("Entrega criada para $nomeDoCliente");
    }

    public function getNomeDoCliente(): string {
        return $this->cliente->getNome();
    }

    public function getNomeDoEntregador(): string {
        return $this->entregador->getNome();
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function concluirEntrega(): void {
        $this->email = "concluída";
        $nomeDoCliente = $this->cliente->getNome();
        $this->log("Entrega concluída para $nomeDoCliente");
    }

    public abstract function getResumoEntrega(): string;

}
    
?>