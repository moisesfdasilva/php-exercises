<?php
  //complete code for index.php
  include_once "navigation.php";
  $pageData = new stdClass();
  $pageData->title = "Thomas Blom Hansen: Portfolio site";
  $pageData->content = $nav;
  require "newerpage.php";
  echo $page;
?>