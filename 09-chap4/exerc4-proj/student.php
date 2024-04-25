<?php declare(strict_types=1);
  class Student
  {
    private int $student_id;
    private string $student_name;
    private string $student_address;
    private string $student_state;
    private string $student_zip;
    private int $student_age;
    private string $error_message;
    //---CONSTRUCTOR---
    function __construct(int $id, string $name, string $address,
      string $state, string $zip, int $age)
    {
      (string) $id_error = $this->set_student_id($id) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $name_error = $this->set_student_name($name) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $address_error = $this->set_student_address($address) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $state_error = $this->set_student_state($state) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $zip_error = $this->set_student_zip($zip) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $age_error = $this->set_student_age($age) == TRUE ? 'TRUE' : 'FALSE';
      $this->error_message = $id_error . $name_error . $address_error . $state_error . 
        $zip_error . $age_error;
    }
    // ---toString---
    public function __toString() : string
    {
      return $this->error_message;
    }
    //---SET METHODS---
    function set_student_id(int $id) : bool
    {

      (bool) $error_message = TRUE;
      (is_int($id)) ?
        $this->student_id = $id : $error_message = FALSE;
      return $error_message;
    }
    function set_student_name(string $name) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($name)  && strlen($name) <= 70) ?
        $this->student_name = $name : $error_message = FALSE;
      return $error_message;
    }
    function set_student_address(string $address) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($address)  && strlen($address) <= 200) ?
        $this->student_address = $address : $error_message = FALSE;
      return $error_message;
    }
    function set_student_state(string $state) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($state)  && strlen($state) <= 70) ?
        $this->student_state = $state : $error_message = FALSE;
      return $error_message;
    }
    function set_student_zip(string $zip) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($zip)  && strlen($zip) <= 70) ?
        $this->student_zip = $zip : $error_message = FALSE;
      return $error_message;
    }
    function set_student_age(int $age) : bool
    {
      (bool) $error_message = TRUE;
      (is_int($age)) ?
        $this->student_age = $age : $error_message = FALSE;
      return $error_message;
    }
    //---GET METHODS---
    function get_student_id() : int
    {
      return $this->student_id;
    }
    function get_student_name() : string
    {
      return $this->student_name;
    }
    function get_student_address() : string
    {
      return $this->student_address;
    }
    function get_student_state() : string
    {
      return $this->student_state;
    }
    function get_student_zip() : string
    {
      return $this->student_zip;
    }
    function get_student_age() : int
    {
      return $this->student_age;
    }
  }
?>