<?php

require_once "5.11-tarefa.php";

class TarefaRevisavel extends Tarefa {
    private bool $revisada;

    public function __construct(string $titulo, string $descricao) {
        parent::__construct($titulo, $descricao);
        $this->revisada = false;
    }

    public function concluir(): void {
        if ($this->revisada) {
            $this->concluida = true;
        }
    }

    public function revisar(): void {
        $this->revisada = true;
    }

    public function getRevisaoFormatada(): string {
        $status = "🚫 sem revisão";
        if ($this->revisada) {
            $status = "📝 revisado";
        }
        return $status;
    }

    public function getIcons(): array {
        return [
            $this->getConcluida(),
            $this->getRevisaoFormatada(),
        ];
    }

}

?>
