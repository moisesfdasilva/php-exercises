<?php

$btnTema = "Escuro";
$style = "light";

if (isset($_COOKIE['tema'])) {
    $btnTema = $_COOKIE['tema'] == "light" ? "Escuro" : "Claro";
    $style = $_COOKIE['tema'];
}

if (isset($_POST['tema'])) {
    if ($_POST['tema'] == "Claro") {
        $btnTema = "Escuro";
        $style = "light";
    } else {
        $btnTema = "Claro";
        $style = "dark";
    }
    setcookie('tema', $style);
}

$style_link = "index.$style.style.css";

require_once 'index.view.php';