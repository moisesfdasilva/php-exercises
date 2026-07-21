<?php

require_once "5.11-tarefa.php";

class TarefaPrazo extends Tarefa {
    private DateTime $prazo;

    public function __construct(string $titulo, string $descricao, DateTime $prazo) {
        parent::__construct($titulo, $descricao);
        $this->prazo = $prazo;
    }

    public function concluir(): void {
        if ($this->estaNoPrazo()) {
            $this->concluida = true;
        }
    }

    public function getPrazoFormatado(): string {
        $status = "⏰ fora do prazo";
        if ($this->estaNoPrazo()) {
            $status = "📅 dentro do prazo";
        }
        return $status;
    }

    public function getIcons(): array {
        return [
            $this->getConcluida(),
            $this->getPrazoFormatado(),
        ];
    }

    private function estaNoPrazo(): bool {
        $hoje = new DateTime();
        $hoje->setTime(0, 0, 0);
        $prazo = clone $this->prazo;
        $prazo->setTime(0, 0, 0);
        return $hoje <= $prazo;
    }

}

?>
