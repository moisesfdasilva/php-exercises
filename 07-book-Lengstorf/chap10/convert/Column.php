<?php
  if((isset($_POST['table'])) and (isset($_POST['database'])) and 
    (isset($_POST['titles'])) and (isset($_POST['title']))){
    // Database
    $columns = $_POST['table'];
    $database = $_POST['database'];
    $Label = $_POST['titles'];
    $RangeLabel = $_POST['title'];
    require_once "models/accessData.class.php";
    $dataObject = new accessData();
    $Data = $dataObject->returnDatabaseData($database, $columns,
    $Label, $RangeLabel);
    require_once "views/googleDashboard.php";
    $info .= displayDashboard($Data, $RangeLabel, $Label);
  } else if((isset($_POST['filename'])) and (isset($_POST['numeric_Title'])) and 
    ($_POST['all_Columns']) and ($_POST['numeric_Name'])) {
    //Excel
    $file = $_POST['filename'];
    $numeric_Column = $_POST['numeric_Title'];
    $numeric_Name = $_POST['numeric_Name'];
    $columns = $_POST['all_Columns'];
    $columns_Info = explode(',',$columns);
    require_once "models/accessData.class.php";
    $dataObject = new accessData();
    $Data = $dataObject->returnExcelData($file, $columns_Info[0], $numeric_Column);
    require_once "views/googleDashboard.php";
    $info .= displayDashboard($Data, $numeric_Name, $columns_Info[1]);
  }
?>