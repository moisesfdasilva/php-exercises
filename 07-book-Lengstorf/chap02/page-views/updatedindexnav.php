<?php
  //partial code for index.php
  if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
  } else {
    $fileToLoad = "skills";
  }
  include_once "$fileToLoad.php";
  $pageData->content .= $info;
?>