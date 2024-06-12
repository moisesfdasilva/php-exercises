<?php
  function checkImageFile($tmpName, $variableName) {
    $valid_File_Types = array('image/jpeg' => 'jpg');
    $max_Size = 40 * 1024 * 1024;
    $errorStatus = false;
    if(!isset($_FILES[$variableName])) {
      $errorStatus = true;
    } else {
      $info = finfo_open(FILEINFO_MIME_TYPE);
      if (!$info) {
        $errorStatus = true;
      } else {
        $mime_type = finfo_file($info, $tmpName);
        if (!in_array($mime_type, array_keys($valid_File_Types))) {
          $errorStatus = true;
        } else {
          if (filesize($_FILES[$variableName]['tmp_name']) > $max_Size) {
            $errorStatus = true;
          }
          finfo_close($info);
        }
      }
    }
    return $errorStatus;
  }
?>