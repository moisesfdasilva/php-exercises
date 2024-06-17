<?php
  include_once "views/admin/admin-form-html.php";

  if (isset($_POST['new-admin'])) {
    include_once "models/Admin_Table.class.php";
    $newAdmin = new Admin_Table($db);
    $newAdmin->create($_POST['email'], $_POST['userid'],
      $_POST['password']);
  }
?>