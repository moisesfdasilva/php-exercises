<?php
  $entriesFound = isset($entries);
  if ($entriesFound === false) {
    trigger_error('views/admin/entries-html.php needs $entries');
  }
  $info = "<h1>Blog Entries</h1>";
  $info .= "<ul id='blog-entries'>";
  $info .= "<ul>";
  while ($entry = $entries->fetchObject()) {
    $href = "admin.php?page=editor&id=$entry->entry_id";
    $info .= "<li><a href='$href'>$entry->title</a></li>";
  }
  $info .= "</ul>";
?>