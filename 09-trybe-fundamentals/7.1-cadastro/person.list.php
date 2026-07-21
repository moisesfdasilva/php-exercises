<?php
require_once "session.start.php";
require_once 'style.php';

if (!isset($_SESSION['pessoas'])) {
    header('Location: index.php');
}

$pessoas = Database::listPessoas();
$style = "dark";

if (isset($_COOKIE['style'])) {
    $style = $_COOKIE['style'] == "dark"? "light": "dark";
}

require_once 'person.list.view.php';