<?php
  $info = "
    <form method='post' action='admin.php?page=register' id='register'>
      <fieldset>
        <legend>New Entry Submission</legend>
        <label>Student Name</label>
        <input type='text' name='student_name' maxlength='70' />
        <label>Student Course</label>
        <input type='text' name='student_course' maxlength='70' />
        <fieldset id='editor-buttons'>
          <input type='submit' name='action' value='save' />
          <input type='submit' name='action' value='delete' />
        </fieldset>
      </fieldset>
    </form>";
?>