<?php
  $entryDataFound = isset($entryData);
  if($entryDataFound === false){
    $entryData = new StdClass();
    $entryData->student_id = 0;
    $entryData->student_name = "";
    $entryData->student_course = "";
  }
  $info = "
    <form method='post' action='admin.php?page=register' id='register'>
      <input type='hidden' name='student_id'
        value='$entryData->student_id' />
      <fieldset>
        <legend>New Entry Submission</legend>
        <label>Student Name</label>
        <input type='text' name='student_name' maxlength='70' 
          value='$entryData->student_name'/>
        <label>Student Course</label>
        <input type='text' name='student_course' maxlength='70'
          value='$entryData->student_course'/>
        <fieldset id='editor-buttons'>
          <input type='submit' name='action' value='save' />
          <input type='submit' name='action' value='delete' />
        </fieldset>
      </fieldset>
    </form>";
?>