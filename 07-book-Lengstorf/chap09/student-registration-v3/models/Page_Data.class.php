<?php
  class Page_Data {
    public string $title = "";
    public string $content = "";
    public string $css = "";

    function __construct() {
      $this->title = "";
      $this->content = "";
      $this->css = "";
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

    public function getCss() : string {
      return $this->css;
    }
    public function setCss(string $value) {
      $this->css = $value;
    }
  }
?>
