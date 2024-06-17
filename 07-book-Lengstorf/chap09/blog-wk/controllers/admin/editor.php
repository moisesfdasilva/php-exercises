<?php
  include_once "models/Blog_Entry_Table.class.php";
  $entryTable = new Blog_Entry_Table($db);
  $editorSubmitted = isset($_POST['action']);
  if ($editorSubmitted) {
    $buttonClicked = $_POST['action'];
    $id = clean_input($_POST['id']);
    $title = clean_input($_POST['title']);
    $entry = clean_input($_POST['entry']);
    $img = clean_input($_POST['image']);

    if (($buttonClicked === 'save') and ($id === '0')) {
      $entryTable->saveEntry($title, $entry, $img);
    } else if (($buttonClicked === 'save') and ($id != '0')) {
      $entryTable->updateEntry($id, $title, $entry, $img);
    } else if ($buttonClicked === 'delete') {
      $entryTable->deleteEntry($id);
    }
  }
  $entryRequested = isset($_GET['id']);
  if ($entryRequested) {
    $id = $_GET['id'];
    $entryData = $entryTable->getEntry($id);
    $entryData->entry_id = $id;
  }
  include_once "views/admin/editor-html.php";
  function clean_input($value) {
    $value = trim($value);
    $value = stripslashes($value);
    $value = strip_tags($value);
    return $value;
  }
?>
