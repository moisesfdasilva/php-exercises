<?php
  $info = "";
  include_once "models/Page_Data.class.php";
  $pageData = new Page_Data();
  $pageData->setTitle("PHP/MySQL blog demo");
  include_once "models/database.php";
  $pageRequested = isset($_GET['page']);
  $controller = "blog";
  if ($pageRequested) {
    if ($_GET['page'] === "search") {
      $controller = "search";
    }
  }
  include_once "controllers/$controller.php";
  include_once "views/search-form-html.php";
  $pageData->setContent($info);
  include_once "views/page.php";
  echo $page;
?>