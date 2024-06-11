<?php
  //complete source code for controllers/admin/newestimages.php
  function upload(){
    include_once "models/Uploader.class.php";
    //image-data is the name attribute used in <input type='file' />
    $uploader = new ImagesUploader("image-data");
    $uploader->saveIn("imgs");
    $fileUploaded = $uploader->save();
    if ( $fileUploaded ) {
      $out = "<h1>New image uploaded</h1>";
    } else {
      throw new Exception("Error: File not uploaded to Imgs folder");
    }
    return $out;
  }
  $imageSubmitted = isset($_POST['new-image']);
  //if the upload form was submitted
  if ($imageSubmitted) {
    $info = upload();
  } else {
    include_once "views/admin/newest-images-html.php";
  }
?>