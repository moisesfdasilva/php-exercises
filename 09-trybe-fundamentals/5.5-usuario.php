<?php

    require("5.5-tarefa.php");

    class Usuario {
        private $nome;
        private $email;
        private $tarefas = [];

        public function __construct($nome, $email) {
            $this->nome = $nome;
            $this->email = $email;
        }

        public function getNome() {
            return $this->nome;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function adicionarTarefa($tarefa) {
            array_push($this->tarefas, $tarefa);
        }

        public function listarTarefas() {
            return $this->tarefas;
        }

    }

?>