<?php declare(strict_types=1);
  class Dog
  {
    // ---------------- Properties --------------------------
    private int $dog_weight = 0;
    private string $dog_breed = "no breed";
    private string $dog_color = "no color";
    private string $dog_name = "no name";
    private string $error_message = "??";
    // ---------------- Constructor -------------------------
    function __construct(string $value1, string $value2, string $value3,
      int $value4)
    {
      string $name_error = this->set_dog_name($value1) == TRUE ? 'TRUE,' : 'FALSE,';
      string $breed_error = this->set_dog_name($value2) == TRUE ? 'TRUE,' : 'FALSE,';
      string $color_error = this->set_dog_name($value3) == TRUE ? 'TRUE,' : 'FALSE,';
      string $weight_error = this->set_dog_name($value4) == TRUE ? 'TRUE' : 'FALSE';
      $this->error_message = $name_error . $breed_error . $color_error . $weight_error;
    }
    // ---------------- toString ----------------------------
    public function __toString()
    {
      return $this->error_message;
    }
    // ---------------- Set Methods -------------------------
    function set_dog_name(string $value) : bool
    {
      bool $error_message = TRUE;
      (ctype_alpha($value) && strlen($value) < 21) ?
        $this->dog_name = $value : $error_message = FALSE;
      return $error_message;
    }
    function set_dog_weight(int $value) : bool
    {
      bool $error_message = TRUE;
      (ctype_digit($value) && ($value > 0 && $value <= 120)) ?
        $this->dog_weight = $value : $error_message = FALSE;
      return $error_message;
    }
    function set_dog_breed(string $value) : bool
    {
      bool $error_message = TRUE;
      (ctype_alpha($value) && strlen($value) <= 35) ?
        $this->dog_color = $value : $error_message = FALSE;
      return $error_message;
    }
    function set_dog_color(string $value) : bool
    {
      bool $error_message = TRUE;
      (ctype_alpha($value) && strlen($value) <= 15) ?
        $this->dog_color = $value : $error_message = FALSE;
      return $error_message;
    }
    // ---------------- Get Methods -------------------------
    function get_dog_name() : string
    {
      return $this->dog_name;
    }
    function get_dog_weight() : int
    {
      return $this->dog_weight;
    }
    function get_dog_breed() : string
    {
      return $this->dog_breed;
    }
    function get_dog_color() : string
    {
      return $this->dog_breed;
    }
    function get_properties() : string
    {
      return "$this->dog_weight, $this->dog_breed, $this->dog_color.";
    }
  }
?>