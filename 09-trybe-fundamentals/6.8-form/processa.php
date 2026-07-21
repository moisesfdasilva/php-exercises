<?php
session_start();

$_SESSION['nome'] = htmlspecialchars($_POST['nome']);
$_SESSION['email'] = htmlspecialchars($_POST['email']);
$_SESSION['mensagem'] = htmlspecialchars($_POST['mensagem']);

header('Location: obrigado.php');
exit;
