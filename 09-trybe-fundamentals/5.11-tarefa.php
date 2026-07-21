<?php

require_once "5.11-iTarefa.php";

abstract class Tarefa implements ITarefa {
    private string $titulo;
    private string $descricao;
    protected bool $concluida;
    private static $contador = 0;


    public function __construct(string $titulo, string $descricao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->concluido = false;
        self::$contador++;
    }

    public static function getContador(): int {
        return self::$contador;
    }

    public function getConcluida(): string {
        $status = "❌";
        if ($this->concuida) {
            $status = "✅";
        }
        return $status;
    }

    public function getTitulo(): string {
        return $this->titulo;
    }

    public function getDescricao(): string {
        return $this->descricao;
    }

    public function getResumo(): string {
        $status = "❌";
        if ($this->concluida) {
            $status = "✅";
        }
        return "{$status} {$this->titulo}";
    }

}

?>
