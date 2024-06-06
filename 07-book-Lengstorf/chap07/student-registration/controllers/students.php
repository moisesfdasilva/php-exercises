<?php
  include_once "models/Students_Entry_Table.class.php";
  $entryTable = new Students_Entry_Table($db);
  $isEntryClicked = isset($_GET['id']);
  if ($isEntryClicked) {
    $entryId = $_GET['id'];
    $entryData = $entryTable->getById($entryId);
    include_once "views/entry-html.php";
  } else {
    $entries = $entryTable->getAllEntries();
    include_once "views/list-entries-html.php";
  }
?>