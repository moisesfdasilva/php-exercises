<?php
  //complete code for index.php
  string $nav = "";
  string $info = "";
  include_once "classnavigation.php";
  include_once "Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->title = "Thomas Blom Hansen: Portfolio site";
  $pageData->css = "<link href='css/layout.css' rel='stylesheet' />";
  $pageData->content = $nav;
  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
  } else {
    $fileToLoad = "skills";
  }
  include_once "page-views/$fileToLoad.php";
  $pageData->content .= $info;
  require "styling/pagewithcss.php";
  echo $page;
?>