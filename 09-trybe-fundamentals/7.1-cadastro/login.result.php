<?php
require_once "session.start.php";

if(isset($_SESSION['pessoas'])) {
    header('Location: person.list.php');
} else {
    header('Location: login.php');
}

// se tudo ok, redirecionar para person.list.php
// se falha no login, redirecionar para login.php

//usuário: john@betrybe.com
//senha: john