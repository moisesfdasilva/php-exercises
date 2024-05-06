<?php
  //complete code for index.php
  $pageData = new stdClass();
  $pageData->title = "New, object-oriented test title";
  $pageData->content = "<h1>Hello from an object</h1>";
  require "newerpage.php";
  echo $page;
?>