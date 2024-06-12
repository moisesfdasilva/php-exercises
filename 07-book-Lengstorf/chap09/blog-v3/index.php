<?php
  $nav = "";
  $info = "";
  include_once 'views/navigation.php';
  include_once "models/Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("Student Registration");
  $pageData->setContent($nav);
  include_once "models/database.php";
  $pageRequested = isset($_GET['page']);
  $controller = "search";
  if ($pageRequested) {
    if ($_GET['page'] === "students") {
      $controller = "students";
    }
  }
  include_once "controllers/$controller.php";
  $pageData->appendContent($info);
  include_once "views/page.php";
  echo $page;
?>