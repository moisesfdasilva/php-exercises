<?php
  $nav = "";
  $info = "";
  try {
    include_once "models/Page_Data.class.php";
    $pageData = new Page_Data();
    $pageData->setTitle("PHP/MySQL blog demo");
    $pageData->setCss("<link rel='stylesheet' href='css/blog.css'>");
    include_once "models/database.php";
    include_once "models/Admin_User.class.php";
    $admin = new Admin_User();
    include_once "controllers/admin/login.php";
    $pageData->setContent($info);
    if ($admin->isLoggedIn()) {
      include "views/admin/admin-navigation.php";
      $pageData->setContent($nav);
      $navigationIsClicked = isset($_GET['page']);
      if ($navigationIsClicked) {
        $controller = $_GET['page'];
      } else {
        $controller = "entries";
      }
      include_once "controllers/admin/$controller.php";
      $pageData->appendContent($info);
    }
    include_once "views/page.php";
    echo $page;
  } catch(Exception $e) {
    echo "System Busy. Please come back later";
    $currentDateTime = date('Y-m-d H:i:s');
    $errorString = $currentDateTime . "-" . $e->getMessage();
    error_log($errorString, 3, "error-log.log");
  }
?>