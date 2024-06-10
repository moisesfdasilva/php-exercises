<?php
  $entriesFound = isset($entries);
  if ($entriesFound === false) {
    trigger_error('views/list-entries-html.php needs $entries');
  }
  $info = "<h1>Blog Entries</h1>";
  $info .= "<ul id='blog-entries'>";
  while ($entry = $entries->fetchObject()) {
    $href = "index.php?page=blog&id=$entry->entry_id";
    $info .= "<li>
      <h2>$entry->title</h2>
      <div>$entry->intro
      <p><a href='$href'>Read more</a></p>
      </div>
      </li>";
  }
  $info .= "</ul>";
?>