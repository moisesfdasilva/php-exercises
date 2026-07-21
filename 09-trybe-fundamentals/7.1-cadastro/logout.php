<?php
require_once "session.start.php";

session_destroy();

header('Location: index.php');
