<?php
  class Page_Data {
    public string $title = "";
    public string $content = "";

    function __construct() {
      $this->title = "Title Goes Here";
      $this->content = "Page Content Goes Here";
    }

    public function getTitle() : string {
      return $this->title;
    }
    public function setTitle(string $value) {
      $this->title = $value;
    }

    public function getContent() : string {
      return $this->content;
    }
    public function setContent(string $value) {
      $this->content = $value;
    }
    public function appendContent(string $value) {
      $this->content .= $value;
    }
  }
?>