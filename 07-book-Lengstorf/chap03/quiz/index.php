<?php
  //complete code for index.php
  $nav = "";
  $info = "";
  include_once "Page_Data.class.php";
  include_once "views/navigation.php";
  $pageData = new Page_Data();
  $pageData->title = "Building and processing HTML forms with PHP";
  $pageData->content = $nav;
  $pageData->content .= "<div>...and a form here</div>";
  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
  } else {
    $fileToLoad = "search";
  }
  include_once "views/$fileToLoad.php";
  $pageData->content .= $info;
  require "pagewithcss.php";
  echo $page;
?>
