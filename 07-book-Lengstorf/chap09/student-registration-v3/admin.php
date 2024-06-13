<?php
  $nav = "";
  $info = "";
  include_once 'views/admin/admin-navigation.php';
  include_once "models/Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("Student Registration");
  // $pageData->setCss("<link rel='stylesheet' href='css/style.css'>");
  $pageData->setContent($nav);
  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked) {
    $contrl = $_GET['page'];
  } else {
    $contrl = "entries";
  }
  include_once "models/database.php";
  include_once "controllers/admin/$contrl.php";
  $pageData->appendContent($info);
  include_once "views/page.php";
  echo $page;
?>