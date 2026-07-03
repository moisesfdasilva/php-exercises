<?php

    class Pessoa {
        public $nome;
        public $nascimento;
        public $cpf;
        public $endereco;
        public $cidade;
        public $estado;
        public $pais;
        public $email;

        //public
        //private
        //protected

        public function __construct($nome, $nascimento, $cpf, $endereco, $cidade,
                $estado, $pais, $email) {
            $this->nome = $nome;
            $this->nascimento = $nascimento;
            $this->cpf = $cpf;
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->pais = $pais;
            $this->email = $email;
        }

        public function apresentar() {
            echo "Olá, meu nome é {$this->nome} e meu e-mail é {$this->email}";
        }
    }

?>