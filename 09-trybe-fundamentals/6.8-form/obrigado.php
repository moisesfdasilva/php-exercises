<?php
session_start();

$style = "light";

if (isset($_COOKIE['tema'])) {
    $style = $_COOKIE['tema'];
}

if (isset($_SESSION['nome']) && isset($_SESSION['mensagem'])) {
    $nome = $_SESSION['nome'];
    $mensagem = $_SESSION['mensagem'];
    $style_link = "index.$style.style.css";

    require_once 'obrigado.view.php';
} else {
    require_once 'index.php';
}
