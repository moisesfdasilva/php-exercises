<?php
require_once "session.start.php";
require_once "style.php";

if(isset($_GET["style"])) {
    setcookie('style', $_GET["style"]);
}

require_once 'index.view.php';