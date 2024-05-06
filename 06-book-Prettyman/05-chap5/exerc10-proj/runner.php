<?php declare(strict_types=1);
  class Runner
  {
    private string $name;
    private string $address;
    private string $gender;
    private int $age;
    private string $tshirt_size;
    private string $message_err;
    //---CONSTRUCTOR---
    function __construct(string $new_name, string $new_address, string $new_gender, int $new_age,
      string $new_tshirt_size)
    {
      (string) $name_err = $this->set_name($new_name) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $address_err = $this->set_address($new_address) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $gender_err = $this->set_gender($new_gender) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $age_err = $this->set_age($new_age) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $tshirt_size_err = $this->set_tshirt_size($new_tshirt_size) == TRUE ? 'TRUE' : 'FALSE';

      $this->message_err = $name_err . $address_err . $gender_err . $age_err . $tshirt_size_err;
    }
    // ---toString---
    public function __toString() : string
    {
      return $this->message_err;
    }
    //---SET METHODS---
    function set_name(string $new_name) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($new_name) && (strlen($new_name) <= 70)) ?
        $this->name = $new_name : $error_message = FALSE;
      return $error_message;
    }
    function set_address(string $new_address) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($new_address) && (strlen($new_address) <= 200)) ?
        $this->address = $new_address : $error_message = FALSE;
      return $error_message;
    }
    function set_gender(string $new_gender) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($new_gender) && (strlen($new_gender) <= 20)) ?
        $this->gender = $new_gender : $error_message = FALSE;
      return $error_message;
    }
    function set_age(int $new_age) : bool
    {
      (bool) $error_message = TRUE;
      (is_int($new_age)) ?
        $this->age = $new_age : $error_message = FALSE;
      return $error_message;
    }
    function set_tshirt_size(string $new_tshirt_size) : bool
    {
      (bool) $error_message = TRUE;
      ($this->validator_tshirt_size($new_tshirt_size)) ?
        $this->tshirt_size = $new_tshirt_size : $error_message = FALSE;
      return $error_message;
    }
    //---GET METHODS---
    function get_name() : string
    {
      return $this->name;
    }
    function get_address() : string
    {
      return $this->address;
    }
    function get_gender() : string
    {
      return $this->gender;
    }
    function get_age() : int
    {
      return $this->age;
    }
    function get_tshirt_size() : string
    {
      return $this->tshirt_size;
    }
    // XML VALIDATOR
    private function validator_tshirt_size(string $value) : bool
    {
      $tshit_size_file = simplexml_load_file("tshirt-sizes.xml");
      $xmlText = $tshit_size_file->asXML();
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