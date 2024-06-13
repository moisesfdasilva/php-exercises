<?php
  require_once "views/checkImageFile.php";
  class ImagesUploader {
    private $filename;
    private $fileData;
    private $destination;
    private $keyValue;

    public function __construct(string $key) {
      var_dump($_FILES);
      $this->keyValue = $key;
      $this->filename = $_FILES[$key]['name'];
      $this->fileData = $_FILES[$key]['tmp_name'];
    }

    public function saveIn($folder) {
      $myDirectoryName = getcwd();
      $this->destination = "$myDirectoryName/$folder";
    }

    public function save() {
      $variableName = $this->keyValue;
      $tmp = $_FILES[$this->keyValue]['tmp_name'];
      $folderIsWriteAble = is_writable($this->destination);
      $notValid = checkImageFile($tmp, $variableName);
      if (!$notValid and $folderIsWriteAble) {
        $name = "$this->destination/$this->filename";
        $success = move_uploaded_file($this->fileData, $name);
      } else {
        $success = false;
      }
      return $success;
    }
  }
?>