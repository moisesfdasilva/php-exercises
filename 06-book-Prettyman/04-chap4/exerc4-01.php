<?php declare(strict_types=1);
  class Dog
  {
    private int $dog_weight = 0;
    private string $dog_breed = "no breed";
    private string $dog_color = "no color";
    private string $dog_name = "no name";

    function display_properties()
    {
      print "Dog weight is $this->dog_weight. Dog breed is
        $this->dog_breed. Dog color is $this->dog_color.";
    }
  }
?>