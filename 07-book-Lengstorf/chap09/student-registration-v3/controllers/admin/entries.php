<?php
  include_once "models/Students_Entry_Table.class.php";
  $entryTable = new Students_Entry_Table($db);
  $entries = $entryTable->getAllEntries();
  include_once "views/admin/list-entries-html.php";
?>