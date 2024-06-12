<?php
  include_once "models/Students_Entry_Table.class.php";
  $entryTable = new Students_Entry_Table($db);
  $searchOutput = "";
  include_once "views/search-form-html.php";
  if (isset($_POST['search-term'])) {
    $searchTerm = $_POST['search-term'];
    $searchData = $entryTable->searchEntry($searchTerm);
    include_once "views/searched-results-html.php";
  }
?>