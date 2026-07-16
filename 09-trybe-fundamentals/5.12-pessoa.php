<?php

abstract class Pessoa {
    private string $nome;
    private string $email;

    public function __construct(string $nome, string $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public abstract function getIdentificacao(): string;

}
    
?>