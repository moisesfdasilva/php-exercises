<?php
  $entryDataFound = isset($entryData);
  if ($entryDataFound === false) {
    $entryData = new StdClass();
    $entryData->entry_id = 0;
    $entryData->title = "";
    $entryData->entry_text = "";
    $entryData->image = "";
  }
  $info = "
    <form method='post' action='admin.php?page=editor' id='editor'>
      <input type='hidden' name='id' value='$entryData->entry_id' />
      <fieldset>
        <legend>New Entry Submission</legend>
         <label>Title</label>
         <input type='text' name='title' maxlength='150'
           value='$entryData->title'";

  if ($entryData->title !="") {
    $info .= "value='$entryData->title' ";
  }
  $info .= "
      pattern='[A-Za-z]{,150}'
      title='Title can contain only alphabetic letters, no special characters. Title is required.'
      required />
      <p>Image<br>
    <select name='image'>";
  $dir_name = "imgs";
  chdir($dir_name);
  $images = glob("*.jpg");
  $info .="<option value='None'";
  if ($entryData->image == "") {
    $info .=" selected ";
  }
  $info .= ">None</option>";
  foreach($images as $value) {
    $info .= "<option value='$value'";
    if ($entryData->image == $value) {
      $info .=" selected ";
    }
    $info .= ">$value</option>";
  }
  $info .= "</select>
      <label>Entry</label>
      <textarea name='entry'>$entryData->entry_text</textarea>
        <fieldset id='editor-buttons'>
          <input type='submit' name='action' value='save' />
          <input type='submit' name='action' value='delete' />
        </fieldset>
      </fieldset>
    </form>";
?>