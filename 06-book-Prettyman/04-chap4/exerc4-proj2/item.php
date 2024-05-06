<?php declare(strict_types=1);
  class Item
  {
    private int $item_number;
    private string $item_description;
    private string $item_size;
    private string $item_self;
    private int $item_isle;
    private int $item_amount;
    private float $item_price;
    private string $error_message;

    //---CONSTRUCTOR---
    function __construct(int $number, string $description, string $size, string $self, int $isle,
      int $amount, float $price)
    {
      (string) $number_err = $this->set_item_number($number) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $description_err = $this->set_item_description($description) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $size_err = $this->set_item_size($size) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $self_err = $this->set_item_self($self) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $isle_err = $this->set_item_isle($isle) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $amount_err = $this->set_item_amount($amount) == TRUE ? 'TRUE,' : 'FALSE,';
      (string) $price_err = $this->set_item_price($price) == TRUE ? 'TRUE,' : 'FALSE,';

      $this->error_message = $number_err . $description_err . $size_err . $self_err .
        $isle_err . $amount_err . $price_err;
    }

    // ---toString---
    public function __toString() : string
    {
      return $this->error_message;
    }

    //---SET METHODS---
    function set_item_number(int $number) : bool
    {
      (bool) $error_message = TRUE;
      (is_int($number) && $number >= 0 && $number <= 99999) ?
        $this->item_number = $number : $error_message = FALSE;
      return $error_message;
    }
    function set_item_description(string $description) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_print($description)  && strlen($description) <= 70) ?
        $this->item_description = $description : $error_message = FALSE;
      return $error_message;
    }
    function set_item_size(string $size) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_alpha($size)  && strlen($size) <= 70) ?
        $this->item_size = $size : $error_message = FALSE;
      return $error_message;
    }
    function set_item_self(string $self) : bool
    {
      (bool) $error_message = TRUE;
      (ctype_alpha($self)  && strlen($self) <= 70) ?
        $this->item_self = $self : $error_message = FALSE;
      return $error_message;
    }
    function set_item_isle(int $isle) : bool
    {
      (bool) $error_message = TRUE;
      (is_int($isle) && $isle >= 0 && $isle <= 15) ?
        $this->item_isle = $isle : $error_message = FALSE;
      return $error_message;
    }
    function set_item_amount(int $amount) : bool
    {
      (bool) $error_message = TRUE;
      (is_int($amount)) ?
        $this->item_amount = $amount : $error_message = FALSE;
      return $error_message;
    }
    function set_item_price(float $price) : bool
    {
      (bool) $error_message = TRUE;
      (is_float($price) && $price >= 0 && $price <= 1000) ?
        $this->item_price = $price : $error_message = FALSE;
      return $error_message;
    }

    //---GET METHODS---
    function get_item_number() : int
    {
      return $this->item_number;
    }
    function get_item_description() : string
    {
      return $this->item_description;
    }
    function get_item_size() : string
    {
      return $this->item_size;
    }
    function get_item_self() : string
    {
      return $this->item_self;
    }
    function get_item_isle() : int
    {
      return $this->item_isle;
    }
    function get_item_amount() : int
    {
      return $this->item_amount;
    }
    function get_item_price() : float
    {
      return $this->item_price;
    }
  }
?>