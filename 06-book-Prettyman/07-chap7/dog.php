<?php declare(strict_types=1);
  class Dog
  {
    // ------------------------------ Properties ------------------------------
    private int $dog_weight = 0;
    private string $dog_breed = "no breed";
    private string $dog_color = "no color";
    private string $dog_name = "no name";
    private string $error_message = "??";
    private $breedxml = "";
    // ----------------------------- Constructor ------------------------------
    function __construct($properties_array)
    {
      if (method_exists('dog_container', 'create_object')) {
        $this->breedxml = $properties_array[4];
        (string) $name_error  = $this->set_dog_name($properties_array[0]) ==
          TRUE ? 'TRUE,' : 'FALSE,';
        (string) $color_error = $this->set_dog_color($properties_array[2]) ==
          TRUE ? 'TRUE,' : 'FALSE,';
        (string) $weight_error= $this->set_dog_weight($properties_array[3]) ==
          TRUE ? 'TRUE' : 'FALSE';
        (string) $breed_error = $this->set_dog_breed($properties_array[1]) ==
          TRUE ? 'TRUE,' : 'FALSE,';
        $this->error_message = $name_error . $breed_error .
          $color_error . $weight_error;
        $this->save_dog_data();
        if(stristr($this->error_message, 'FALSE')){
          throw new setException($this->error_message);
        }
      }
      else
      { exit; }
    }
    private function save_dog_data()
    {
      if (file_exists("e5dog_container.php")) {
        require_once("e5dog_container.php");
        print"// use Chapter 5 container w exception handling";
      }
      else
      {
        throw new Exception("Dog container file missing or corrupt");
      }
      $container = new dog_container("dogdata");
      // sets the tag name to look for in XML file
      $properties_array = array("dogdata");
      // not used but must be passed into create_object
      $dog_data = $container->create_object($properties_array);
      // creates dog_data object
      $method_array = get_class_methods($dog_data);
      $last_position = count($method_array) - 1;
      $method_name = $method_array[$last_position];
      $record_Array = array(array('dog_name'=>"$this->dog_name", 
        'dog_weight'=> "$this->dog_weight",
        'dog_color'=>"$this->dog_color", 
        'dog_breed'=>"$this->dog_breed"));
      $dog_data->$method_name("Insert",$record_Array);
      $dog_data = NULL;
    }
    function set_dog_name(string $value) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_alpha($value) && strlen($value) <= 20) ? $this->dog_name = $value :
        $this->error_message = FALSE;
      return $this->error_message;
    }
    function set_dog_weight(int $value) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_digit($value) && ($value > 0 && $value <= 120)) ?
        $this->dog_weight = $value : $this->error_message = FALSE;
      return $this->error_message;
    }
    function set_dog_breed(string $value) : bool
    {
      (bool) $error_message = TRUE;
      ($this->validator_breed($value) === TRUE) ? $this->dog_breed = $value :
        $this->error_message = FALSE;
      return $this->error_message;
    }
    function set_dog_color(string $value) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_alpha($value) && strlen($value) <= 15) ?
        $this->dog_color = $value : $this->error_message = FALSE;
      return $this->error_message;
    }
    // ----------------------------- Get Methods ------------------------------
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
      return $this->dog_color;
    }
    function get_properties() : string
    {
      return "$this->dog_name,$this->dog_weight,$this->dog_breed,$this->dog_color.";
    }
    // -----------------------------General Method-----------------------------
    private function validator_breed($value) : bool
    {
      $breed_file = simplexml_load_file($this->breedxml);
      $xmlText = $breed_file->asXML();
      if(stristr($xmlText, $value) === FALSE)
      {
        return FALSE;
      }
      else
      {
        return TRUE;
      }
    }
  }
?>