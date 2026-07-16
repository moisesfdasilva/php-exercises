<?php

require_once "5.11-tarefa.php";

class TarefaSimples extends Tarefa {

    public function __construct(string $titulo, string $descricao) {
        parent::__construct($titulo, $descricao);
    }

    public function concluir(): void {
        $this->concluida = true;
    }

    public function getIcons(): array {
        return [$this->getConcluida()];
    }
}

?>
