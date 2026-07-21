<?php

require_once "5.11-tarefa.php";

class Usuario {
    private string $nome;
    private string $email;
    private array $tarefas;

    public function __construct(string $nome, string $email) {
        $this->nome = $nome;
        $this->email = $email;
        $this->tarefas = [];
    }

    public function adicionarTarefa(Tarefa $t){
        $this->tarefas[] = $t;
    }

    public function listarTarefas() {
        return $this->tarefas;
    }

    public function getNome() {
        return $this->nome;
    }

}
    
?>