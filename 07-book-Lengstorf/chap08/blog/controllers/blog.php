<?php
  include_once "models/Blog_Entry_Table.class.php";
  $entryTable = new Blog_Entry_Table($db);
  $isEntryClicked = isset($_GET['id']);
  if ($isEntryClicked) {
    $entryId = $_GET['id'];
    $entryData = $entryTable->getEntry($entryId);
    include_once "views/entry-html.php";
  } else {
    $entries = $entryTable->getAllEntries();
    include_once "views/list-entries-html.php";
  }
?>