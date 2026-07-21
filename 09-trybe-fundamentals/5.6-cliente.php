<?php

    require("5.3-classe.php");

    class Cliente extends Pessoa {
        public $limiteCredito;

        public function __construct($nome, $nascimento, $cpf, $endereco, $cidade,
                $estado, $pais, $email, $limiteCredito) {

            parent::__construct($nome, $nascimento, $cpf, $endereco, $cidade,
                    $estado, $pais, $email);

            $this->limiteCredito = $limiteCredito;
        }

        public function exibirInformacoes() {
            echo "{$this->nome} é nosso cliente e possui um limite de crédito 
                    de {$this->limiteCredito}.";
        }

    }

?>