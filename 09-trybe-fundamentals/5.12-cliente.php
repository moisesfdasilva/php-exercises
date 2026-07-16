<?php

require_once "5.12-pessoa.php";

class Cliente extends Pessoa {
    private string $enderecoEntrega;

    public function __construct(string $nome, string $email, string $end) {
        parent::__construct($nome, $email);
        $this->enderecoEntrega = $end;
    }

    public function getIdentificacao(): string {
        $n = parent::getNome();
        $e = $this->enderecoEntrega;
        return "Entregador: $n (Código: $e)";
    }

}
    
?>