<?php
  $entriesFound = isset($entries);
  if ($entriesFound === false) {
    trigger_error('views/list-entries-html.php needs $entries');
  }
  $info = "<h1>All Blog Entries</h1>";
  $info .= "<ul id='blog-entries'>";
  while ($entry = $entries->fetchObject()) {
    $info .= "<li>
      <h2>$entry->title [$entry->entry_id]</h2>
      <div>
      <p>$entry->intro</p>
      </div>
      </li>";
  }
  $info .= "</ul>";
?>