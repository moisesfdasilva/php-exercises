<?php
  include_once "models/Students_Entry_Table.class.php";
  $entryTable = new Students_Entry_Table($db);
  $registerSent = isset($_POST['action']);
  if ($registerSent) {
    $buttonClicked = $_POST['action'];
    $id = clean_input($_POST['student_id']);
    $name = clean_input($_POST['student_name']);
    $course = clean_input($_POST['student_course']);

    if (($buttonClicked === 'save') and ($id === '0')) {
      $entryTable->saveEntry($name, $course);
    } else if (($buttonClicked === 'save') and ($id != '0')) {
      $entryTable->updateEntry($id, $name, $course);
    } else if ($buttonClicked === 'delete') {
      $entryTable->deleteEntry($id);
    }
  }
  $entryRequested = isset($_GET['id']);
  if ($entryRequested) {
    $id = $_GET['id'];
    $entryData = $entryTable->getById($id);
    $entryData->student_id = $id;
  }
  include_once "views/admin/register-html.php";
  function clean_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    return $value;
  }
?>