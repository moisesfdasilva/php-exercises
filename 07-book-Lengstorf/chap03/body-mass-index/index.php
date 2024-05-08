<?php
  $info = "";
  include_once "Bmi_Page.class.php";
  $pageData = new Bmi_Page();
  $pageData->title = "Calculate Your Body Mass Index(Bmi)";
  $pageData->content = "<header><h2>Fill the form here</h2></header>";
  include_once "bmiform.php";
  $pageData->content .= $info;
  require "bmipage.php";
  echo $page;
?>