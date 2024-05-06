<?php
  class dog_data
  {
    private $dogs_array = array(); //defined as an empty array initially
    private $change_log_file = "change.log";

    private function updateRecords($records_array)
    {
      $chge_log_file = date('mdYhis') . $this->change_log_file;
      (string) $chge_string = "";
      foreach ($records_array as $records=>$records_value)
      {
        $this->dogs_array["dog"][$records] = $records_array[$records];
        $chge_string .= "UPDATE Dogs ";
        $chge_string .= "SET dog_name='" . $records_array[$records]['dog_name'] ."', ";
        $chge_string .= "dog_weight='" . $records_array[$records]['dog_weight'] ."',";
        $chge_string .= "dog_color='" . $records_array[$records]['dog_color'] ."', ";
        $chge_string .= "dog_breed='" . $records_array[$records]['dog_breed'] ."' ";
        $chge_string .= "WHERE dog_id='" . $records_array[$records]['dog_id'] . "';\n";
      }
      $chge_log_file = date('mdYhis') . $this->change_log_file;
      error_log($chge_string,3,$chge_log_file); // might exceed 120 chars
    }
    private function deleteRecord($recordNumber)
    {
      foreach ($this->dogs_array as $dogs=>&$dogs_value) {
        for($J=$recordNumber; $J < count($dogs_value) -1; $J++) {
          foreach ($dogs_value[$J] as $column => $column_value)
          {
            $dogs_value[$J][$column] = $dogs_value[$J + 1][$column];
          }
        }
        unset ($dogs_value[count($dogs_value) -1]);
      }
      $dog_id = $this->dogs_array['dog'][$recordNumber]['dog_id'];
      $chge_string = "DELETE FROM Dogs WHERE dog_id='" . $dog_id . "';\n";
      $chge_log_file = date('mdYhis') . $this->change_log_file;
      error_log($chge_string,3,$chge_log_file); // might exceed 120 chars
    }
    private function insertRecords($records_array)
    {
      (string) $chge_string = "";
      $dogs_array_size = count($this->dogs_array["dog"]);
      for($I=0;$I< count($records_array);$I++)
      {
        $this->dogs_array["dog"][$dogs_array_size + $I] = $records_array[$I];
        $dog_id = rand(0,9999); // get a number between 0 and 9999
        while (in_array($dog_id, $this->dogs_array, true)) // in array?
        {
          $dog_id = rand(0,9999); // if it is getting another number
        }
        $chge_string .="INSERT INTO Dogs VALUES('";
        $chge_string .= $dog_id . "', '" . $records_array[$I]['dog_name'] . "', '";
        $chge_string .= $records_array[$I]['dog_weight'] . "', '";
        $chge_string .= $records_array[$I]['dog_color'] . "', '";
        $chge_string .= $records_array[$I]['dog_breed'] . "');";
      }
      $chge_log_file = date('mdYhis') . $this->change_log_file;
      error_log($chge_string,3,$chge_log_file); // might exceed 120 chars
    }
  }
?>