<?php
  $nav = "";
  $info = "";
  include_once 'views/navigation.php';
  include_once "models/Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("Student Registration");
  $pageData->setContent($nav);
  include_once "models/database.php";
  include_once "controllers/students.php";
  $pageData->appendContent($info);
  include_once "views/page.php";
  echo $page;
?>