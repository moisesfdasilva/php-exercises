<?php
  $info = "";
  include_once "Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("Convert Money ^");
  $pageData->setCss(
    "<link href='style.css' rel='stylesheet'/>");

  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
  } else {
    $fileToLoad = "money";
  }

  include_once "views/$fileToLoad.php";
  $pageData->setContent($info);
  require "page.php";
  echo $page;
?>