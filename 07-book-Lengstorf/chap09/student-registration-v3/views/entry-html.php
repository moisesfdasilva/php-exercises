<?php
  $entryFound = isset($entryData);
  if ($entryFound === false) {
    trigger_error('views/entry-html.php needs an $entryData object');
  }
  $info = "<h1>Detailed Student</h1>";
  $info .= "<article>
    <h1>$entryData->student_name [$entryData->student_id]</h1>
    <p>$entryData->student_course</p>
    <p>$entryData->date_created</p>
    </article>";
?>