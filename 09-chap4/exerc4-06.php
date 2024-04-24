<?php declare(strict_types=1);
  require_once('exerc4-03.php');
  $lab = new Dog('Fred', 'Lab', 'Yellow', 100);
  list($name_error, $breed_error, $color_error, $weight_error) = explode(',', $lab);
  print $name_error == 'TRUE' ? 'Name update successful<br/>' :
    'Name update not successful<br/>';
  print $breed_error == 'TRUE' ? 'Breed update successful<br/>' :
    'Breed update not successful<br/>';
  print $color_error == 'TRUE' ? 'Color update successful<br/>' :
    'Color update not successful<br/>';
  print $weight_error == 'TRUE' ? 'Weight update successful<br/>' :
    'Weight update not successful<br/>';
?>