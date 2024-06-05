<?php
  $entryFound = isset($entryData);
  if ($entryFound === false) {
    trigger_error('views/entry-html.php needs an $entryData object');
  }
  $info = "<h1>Detailed Blog</h1>";
  $info .= "<article>
    <h1>$entryData->title</h1>
    <div class='date'>$entryData->date_created</div>
    $entryData->entry_text
    </article>";
?>