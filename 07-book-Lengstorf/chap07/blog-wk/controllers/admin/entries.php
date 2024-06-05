<?php
  include_once "models/Blog_Entry_Table.class.php";
  $entryTable = new Blog_Entry_Table($db);
  $entries = $entryTable->getAllEntries();
  include_once "views/admin/list-entries-html.php";
?>