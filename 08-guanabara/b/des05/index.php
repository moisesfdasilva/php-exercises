<?php
  $info = "";
  include_once "Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("Desafio 005: Analisando um número Real");
  $pageData->setContent("");
  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
  } else {
    $fileToLoad = "main";
  }
  include_once "$fileToLoad.php";
  $pageData->appendContent($info);
  require "page.php";
  echo $page;
?>