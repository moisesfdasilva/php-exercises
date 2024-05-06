<?php
  //complete code for index.php
  string $nav = "";
  string $info = "";
  include_once "securenavigation.php";
  $pageData = new stdClass();
  $pageData->title = "Thomas Blom Hansen: Portfolio site";
  $pageData->content = $nav;
  //changes begin here
  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
  } else {
    $fileToLoad = "skills";
  }
  include_once "$fileToLoad.php";
  $pageData->content .= $info;
  require "newerpage.php";
  echo $page;
?>