<?php
  include_once "models/Admin_Table.class.php";
  $createNewAdmin = isset($_POST['new-admin']);
  if ($createNewAdmin) {
    $newEmail = $_POST['email'];
    $newUserid = $_POST['userid'];
    $newPassword = $_POST['password'];
    $adminTable = new Admin_Table($db);
    try {
      $adminTable->create($newEmail, $newUserid, $newPassword);
      $adminFormMessage = "New user created for $newEmail!";
    } catch (Exception $e) {
      $adminFormMessage = $e->getMessage();
    }
  }
  include_once "views/admin/admin-form-html.php";
?>