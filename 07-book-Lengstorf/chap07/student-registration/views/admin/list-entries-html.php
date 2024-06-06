<?php
  $entriesFound = isset($entries);
  if ($entriesFound === false) {
    trigger_error('views/list-entries-html.php needs $entries');
  }
  $info = "<h1>All Students</h1>";
  $info .= "<ul id='students-entries'>";
  while ($entry = $entries->fetchObject()) {
    $info .= "<li>
      <h2>$entry->student_name [$entry->student_id]</h2>
      <p>$entry->student_course</p>
      </li>";
  }
  $info .= "</ul>";
?>