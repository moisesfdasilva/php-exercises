<?php

    require("5.6-cliente.php");

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

    $pessoas[] = new Cliente(
        "José Junqueira",
        "1982-05-22",
        "918.273.645-00",
        "Rua Radial leste, 81",
        "Palmas",
        "To",
        "Brasil",
        "jose.junqueira@email.com",
        30000
    );
    
    require("5.6-index.view.php");

?>