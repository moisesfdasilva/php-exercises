<?php

require_once "5.12-pessoa.php";

class Entregador extends Pessoa {
    private string $codigoFuncionario;

    public function __construct(string $nome, string $email, string $cod) {
        parent::__construct($nome, $email);
        $this->codigoFuncionario = $cod;
    }

    public function getIdentificacao(): string {
        $n = parent::getNome();
        $e = parent::getEmail();
        return "Cliente: $n <$e>";
    }

}
    
?>