<?php
  include_once "models/Students_Entry_Table.class.php";
  $entryTable = new Students_Entry_Table($db);
  $registerSent = isset($_POST['action']);
  if ($registerSent) {
    $buttonClicked = $_POST['action'];
    if ($buttonClicked === 'save') {
      $name = $_POST['student_name'];
      $course = $_POST['student_course'];
      $entryTable->saveEntry($name, $course);
    }
  }
  include_once "views/admin/register-html.php";
?>