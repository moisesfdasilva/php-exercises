<?php
  include_once "Bmi_Page.class.php";
  $pageData = new Bmi_Page();
  $pageData->title = "Calculate Bmi";
  include_once "bmiform.php";
  $pageData->content = $form;
  require "bmipage.php";
  echo $page;
?>