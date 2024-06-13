<?php
  $entriesFound = isset($entries);
  if ($entriesFound === false) {
    trigger_error('views/list-entries-html.php needs $entries');
  }
  $info = "<h1>All Students</h1>";
  $info .= "<ul id='students-entries'>";
  while ($entry = $entries->fetchObject()) {
    $href = "admin.php?page=register&id=$entry->student_id";
    $info .= "<li><a href='$href'>$entry->student_name</a></li>";
  }
  $info .= "</ul>";
?>