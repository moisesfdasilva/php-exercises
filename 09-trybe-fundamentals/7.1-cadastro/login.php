<?php
require_once 'style.php';
require_once "session.start.php";

if (isset($_SESSION['pessoas'])) {
    header('Location: person.list.php');
}

require_once 'login.view.php';