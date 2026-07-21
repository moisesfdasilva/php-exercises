<?php
require_once "session.start.php";
require_once "classes/Pessoa.php";

$nome = htmlspecialchars($_POST['nome']);
$cpf = htmlspecialchars($_POST['cpf']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);

$nascStrArray = explode('-', htmlspecialchars($_POST['nascimento']));
$dataNasc = "$nascStrArray[0]-$nascStrArray[1]-$nascStrArray[2]";
$dataNasc = DateTime::createFromFormat('Y-m-d', $dataNasc);

$pessoa = new Pessoa($nome, $cpf, $email, $senha, $dataNasc);

Database::addPessoa($pessoa);

header('Location: person.list.php');
