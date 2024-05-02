<?php
  private function updateRecords($records_array)
  {
    $chge_log_file = date('mdYhis') . $this->change_log_file;
    (string) $chge_string = "";
    foreach ($records_array as $records=>$records_value)
    {
      $this->dogs_array["dog"][$records] = $records_array[$records];
      $chge_string .= "UPDATE Dogs ";
      $chge_string .= "SET dog_name='" . $records_array[$records]['dog_name'] ."', ";
      $chge_string .= "dog_weight='" . $records_array[$records]['dog_weight'] ."',”;
      $chge_string .= "dog_color='" . $records_array[$records]['dog_color'] ."', ";
      $chge_string .= "dog_breed='" . $records_array[$records]['dog_breed'] ."' ";
      $chge_string .= "WHERE dog_id='" . $records_array[$records]['dog_id'] . "';\n";
    }
    $chge_log_file = date('mdYhis') . $this->change_log_file;
    error_log($chge_string,3,$chge_log_file); // might exceed 120 chars
  }
?>