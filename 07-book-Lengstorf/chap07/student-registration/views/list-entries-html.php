<?php
  $entriesFound = isset($entries);
  if ($entriesFound === false) {
    trigger_error('views/list-entries-html.php needs $entries');
  }
  $info = "<h1>All Students</h1>";
  $info .= "<ul id='students'>";
  while ($entry = $entries->fetchObject()) {
    $href = "index.php?page=blog&id=$entry->student_id";
    $info .= "<li>
        <h2>$entry->student_name [$entry->student_id]</h2>
        <p>$entry->student_course</p>
        <p><a href='$href'>Read more</a></p>
      </li>";
  }
  $info .= "</ul>";
?>