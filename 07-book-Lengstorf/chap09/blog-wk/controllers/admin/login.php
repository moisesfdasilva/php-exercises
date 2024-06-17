<?php
  include_once "models/Admin_Table.class.php";
  $loginFormSubmitted = isset($_POST['log-in']);
  if ($loginFormSubmitted) {
    $userid = $_POST['userid'];
    $password = $_POST['password'];
    $adminTable = new Admin_Table($db);
    $message = $adminTable->checkCredentials($userid, $password);
    if ($message === "Valid") {
      $admin->login();
    } else {
      $loginFormMessage = $message;
    }
  }
  $loggingOut = isset ($_POST['logout']);
  if ($loggingOut){
    $admin->logout();
  }
  if ($admin->isLoggedIn()) {
    include_once "views/admin/logout-form-html.php";
  } else {
    include_once "views/admin/login-form-html.php";
  }
?>