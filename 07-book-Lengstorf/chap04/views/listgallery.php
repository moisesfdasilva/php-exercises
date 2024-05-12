<?php
  //complete source code for views/gallery.php
  //edit existing function
  function showImages() : string{
    $out = "<h1>Images Gallery</h1>";
    $out .= "<ul id='images'>";
    //$dir_name variable holds the directory that contains the images
    $dir_name = "imgs";
    //chdir command will change our current location from the ch4 directory to the
    //imgs directory in preparation for searching the directory for images
    chdir($dir_name);
    //Glob will filter out all values within the current folder which do not have 
    // the file ending shown It will then create an array in a format similar to the 
    // following.
    $images = glob("*.png");
    foreach($images as $image) {
      $out .= '<li><img src="'.$dir_name. '/' .$image.'" /></li>';
    }
    $out .= "</ul>";
    return $out;
  }
  $info = showImages();
?>