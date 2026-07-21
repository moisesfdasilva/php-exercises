<?php
@session_start();

$tema = 'light';

if (isset($_COOKIE['style'])) {
    $tema = $_COOKIE['style'];
}

$styleLink = '<link rel="stylesheet" href="index.' . $tema . '.style.css">';