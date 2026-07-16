<?php

interface Entregavel {
    public function concluirEntrega(): void;
    public function getResumoEntrega(): string;
}
    
?>