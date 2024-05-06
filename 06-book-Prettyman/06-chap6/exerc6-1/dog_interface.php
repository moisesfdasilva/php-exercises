<?php declare(strict_types=1);
  class setException extends Exception {
    public function errorMessage() {
      list($name_error, $breed_error, $color_error, $weight_error) =
        explode(',', $this->getMessage());
        $name_error == 'TRUE' ? $eMessage = '' :
        (string) $eMessage = 'Name update not successful<br>';
        $breed_error == 'TRUE' ? $eMessage .= '' :
        $eMessage .= 'Breed update not successful<br>';
        $color_error == 'TRUE' ? $eMessage .= '' :
        $eMessage .= 'Color update not successful<br>';
        $weight_error == 'TRUE' ? $eMessage .= '' :
        $eMessage .= 'Weight update not successful<br>';
      return $eMessage;
    }
  }
  function get_properties($lab)
  {
    print "Your dog's name is " . $lab->get_dog_name() . "<br>";
    print "Your dog weights " . $lab->get_dog_weight() . " lbs. <br>";
    print "Your dog's breed is " . $lab->get_dog_breed() . "<br>";
    print "Your dog's color is " . $lab->get_dog_color() . "<br>";
  }
  //----------------Main Section-------------------------------------
  try {
    if (file_exists("e5dog_container.php"))
    { Require_once("e5dog_container.php"); }
    else
    { throw new Exception("Dog container file missing or corrupt"); }
    if (isset($_POST['dog_app'])) {
      if ((isset($_POST['dog_name'])) && (isset($_POST['dog_breed'])) &&
        (isset($_POST['dog_color'])) && (isset($_POST['dog_weight'])))
      {
        $container = new dog_container(filter_var($_POST['dog_app'],
          FILTER_SANITIZE_STRING));
        (string) $dog_name = filter_var( $_POST['dog_name'],
          FILTER_SANITIZE_STRING);
        (string) $dog_breed = filter_var( $_POST['dog_breed'],
          FILTER_SANITIZE_STRING);
        (string) $dog_color = filter_var( $_POST['dog_color'],
          FILTER_SANITIZE_STRING);
        (string) $dog_weight = filter_var( $_POST['dog_weight'],
          FILTER_SANITIZE_STRING);
        $breedxml = $container->get_dog_application("breeds");
        $properties_array = array($dog_name,$dog_breed,$dog_color,
        $dog_weight,$breedxml);
        $lab = $container->create_object($properties_array);
        print "Updates successful<br />";
        get_properties($lab);
      }
      else {
        print "<p>Missing or invalid parameters.
          Please go back to the lab.html page to enter valid information.<br/>";
        print "<a href='dog.html'>Dog Creation Page</a>";
      }
    } else // select box
    {
      $container = new dog_container("selectbox");
      $properties_array = array("selectbox");
      $lab = $container->create_object($properties_array);
      $container->set_app("breeds");
      $dog_app = $container->get_dog_application("breeds");
      $result = $lab->get_select($dog_app);
      print $result;
    }
  } // try
  catch(setException $e)
  {
    echo $e->errorMessage();
  }
  catch(Throwable $t)
  {
    echo $t->getMessage();
  }
  catch(Error $e)
  {
    echo $e->getMessage();
  }
?>