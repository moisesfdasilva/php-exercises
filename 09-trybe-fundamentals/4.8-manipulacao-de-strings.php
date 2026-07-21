<?php

    $nomeBruto = "   maria da silva   ";
    $nomeFormatado = ltrim($nomeBruto);
    $nomeFormatado = rtrim($nomeBruto);
    $nomeFormatado = trim($nomeBruto);
    $nomeFormatado = strtoupper($nomeFormatado); //uppercase
    $nomeFormatado = ucwords($nomeFormatado); //uppercase the first character of each word
    $len = strlen($nomeFormatado);

    $tagsBrutas = "php, backend, api,    segurança ";
    $tagArray = explode(",", $tagsBrutas);
    $tagArray = array_map(fn($t) => "#" . trim($t), $tagArray);
    $tagsLimpas = implode(",", $tagArray);

    $descricaoBruta = "Produto novo!!! IMEDIATO!!! Melhor preço do mercado.";
    $descricaoLimpa = str_replace("IMEDIATO", "Rápido", $descricaoBruta);
    $descricaoLimpa = str_replace(["!!!", "."], ["!", "!!!"], $descricaoLimpa);

    $strValidation = "Não";
    if (str_contains(strtoupper($descricaoLimpa), strtoupper("novo"))) {
        $strValidation = "Sim";
    }
    $strInitialValidation = "Não";
    if (str_starts_with($descricaoLimpa, "Novo")) {
        $strInitialValidation = "Sim";
    }
    $strFinalValidation = "Não";
    if (str_ends_with($descricaoLimpa, "Novo")) {
        $strFinalValidation = "Sim";
    }

    $texto = "O PHP é uma linguagem poderosa para o desenvolvimento web.";
    $email = "estudante@trybe.com";

    $textoFormatado = substr($texto, 0, 22) . "...";
    $emailFormatado = substr(strstr($email, "@"), 1);

    require "4.8-manipulacao-de-strings.view.php"

?>