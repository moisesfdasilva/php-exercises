<?php
  $info = "";
  include_once "Bmi_Data.class.php";
  $pageData = new Bmi_Data();
  $pageData->setTitle("BMI - Body Mass Index ^");
  $pageData->setCss(
    "<link href='style.css' rel='stylesheet'/>");

  $navigationIsClicked = isset($_GET['page']);
  if ($navigationIsClicked ) {
    $fileToLoad = $_GET['page'];
  } else {
    $fileToLoad = "bmi";
  }

  include_once "views/$fileToLoad.php";
  $pageData->setContent($info);
  require "bmipage.php";
  echo $page;
?>
