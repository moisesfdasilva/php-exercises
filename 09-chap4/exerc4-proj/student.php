<?php declare(strict_types=1);
  class Student
  {
    private int $student_id;
    private string $student_name;
    private string $student_address;
    private string $student_state;
    private string $student_zip;
    private int $student_age;
    //---CONSTRUCTOR---
    function __construct(int $id, string $name, string $address,
      string $state, string $zip, int $age)
    {
      $this->student_id = $id;
      $this->student_name = $name;
      $this->student_address = $address;
      $this->student_state = $state;
      $this->student_zip = $zip;
      $this->student_age = $age;
    }
    //---SET METHODS---
    function set_student_id(int $id) : void
    {
      $this->student_id = $id;
    }
    function set_student_name(string $name) : void
    {
      $this->student_name = $name;
    }
    function set_student_address(string $address) : void
    {
      $this->student_address = $address;
    }
    function set_student_state(string $state) : void
    {
      $this->student_state = $state;
    }
    function set_student_zip(string $zip) : void
    {
      $this->student_zip = $zip;
    }
    function set_student_age(int $age) : void
    {
      $this->student_age = $age;
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