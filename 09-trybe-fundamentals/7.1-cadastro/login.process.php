<?php
require_once "session.start.php";

$user = "john@betrybe.com";
$password = "john";

$p = Database::findPessoa($user, $password);

if($p != null) {
    $_SESSION['pessoas'] = [];
    array_push($_SESSION['pessoas'], $p);
    header('Location: login.result.php');
} else {
    header('Location: index.php');
}
