<?php

    class Tarefa {
        private $titulo;
        private $descricao;
        private $concluida;

        public function __construct($titulo, $descricao, $concluida) {
            $this->titulo = $titulo;
            $this->descricao = $descricao;
            $this->concluida = $concluida;
        }

        public function getTitulo() {
            return $this->titulo;
        }

        public function getDescricao() {
            return $this->descricao;
        }

        public function getConcluida() {
            return $this->concluida;
        }

        public function getStrConcluida() {
            if ($this->concluida) {
                return "Sim";
            } else {
                return "Não";
            }
        }

        public function setTitulo($titulo) {
            $this->titulo = $titulo;
        }

        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }

        public function setConcluida($concluida) {
            $this->concluida = $concluida;
        }

    }

?>