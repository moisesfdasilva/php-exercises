<?php

class Pessoa {
    public string $nome;
    public string $cpf;
    public string $email;
    public string $senha;
    public DateTime $nascimento;

    public function __construct(string $nome, string $cpf, string $email, string $senha, DateTime $nascimento) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->senha = $senha;
        $this->nascimento = $nascimento;
    }

    public function getStrNascimento(): string {
        $dia = $this->nascimento->format('d');
        $mes = $this->nascimento->format('m');
        $ano = $this->nascimento->format('y');
        return "$dia-$mes-$ano";
    }

}