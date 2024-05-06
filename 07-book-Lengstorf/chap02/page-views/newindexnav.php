<?php
  // To access URL variables, we use the $_GET superglobal array
  //complete code for index.php
  include_once "navigation.php";
  $pageData = new stdClass();
  $pageData->title = "Thomas Blom Hansen: Portfolio site";
  $pageData->content = $nav;
  //changes begin here
  // The isset() function will return TRUE if the item inside the parentheses (page) is set.
  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked) {
    $fileToLoad = $_GET['page'];
    include_once "$fileToLoad.php";
    $pageData->content .= $info;
  }
  //end of changes
  require "newerpage.php";
  echo $page;
?>