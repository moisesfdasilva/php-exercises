<?php
  include_once "models/Blog_Entry_Table.class.php";
  $entryTable = new Blog_Entry_Table($db);
  $editorSubmitted = isset($_POST['action']);
  if ($editorSubmitted) {
    $buttonClicked = $_POST['action'];
    if ($buttonClicked === 'save') {
      $title = $_POST['title'];
      $entry = $_POST['entry'];
      $entryTable->saveEntry( $title, $entry );
    }
  }
  include_once "views/admin/editor-html.php";
?>