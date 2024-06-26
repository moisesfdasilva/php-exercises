<?php
  class Page_Data {
    private string $title = "";
    private string $content = "";
    private string $css = "";
    private string $embeddedStyle = "";

    function __construct() {
      $this->title = "Title Goes Here";
      $this->content = "Page Content Goes Here";
      $this->css = "CSS Goes Here";
      $this->embeddedStyle = "Embedded CSS Goes Here";
    }

    public function getTitle() : string {
      return $this->title;
    }
    public function setTitle(string $value) {
      if (strpos($value, '^')) {
        $this->title = $value;
      }
    }

    public function getContent() : string {
      return $this->content;
    }
    public function setContent(string $value) {
      if (strpos($value, '<')) {
        $this->content = $value;
      }
    }
    public function appendContent(string $value) {
      if (strpos($value, '<')) {
        $this->content .= $value;
      }
    }
  }
?>