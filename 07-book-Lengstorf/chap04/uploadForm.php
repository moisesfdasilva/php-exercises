<?php
  $info = "
    <h1>Upload New png Images</h1>
    <form
      method='post'
      action='index.php?page=upload'
      enctype='multipart/form-data'
    >
      <label>Find a png image to upload</label>
      <input type='file' name='image-data' accept='image/png'/>
      <input type='submit' value='upload' name='new-image' />
    </form>";
?>