<?php

    require("5.3-classe.php");

    $pessoas = [];

    $pessoas[] = new Pessoa(
        "João da Silva",
        "1990-03-15",
        "123.456.789-00",
        "Rua das Flores, 123",
        "São Paulo",
        "SP",
        "Brasil",
        "joao.silva@email.com"
    );

    $pessoas[] = new Pessoa(
        "Maria Oliveira",
        "1985-07-30",
        "987.654.321-00",
        "Av. Central, 456",
        "Belo Horizonte",
        "MG",
        "Brasil",
        "maria.oliveira@email.com"
    );
    
    require("5.3-index.view.php");

?>