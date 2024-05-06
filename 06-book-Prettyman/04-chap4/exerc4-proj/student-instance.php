<?php declare(strict_types=1);
  require_once('student.php');
  $new_student = new Student(777, 'Joao Carlos', 
    'Av. Paulista 1077, bloco 2/701.', 'Sao Paulo', '765-556', 80);
  
  list($id_error, $name_error, $address_error, $state_error, 
    $zip_error, $age_error) = explode(',', $new_student->__toString());

  print $new_student->get_student_id();
  print '<br/>';
  print $new_student->get_student_name();
  print '<br/>';
  print $new_student->get_student_address();
  print '<br/>';
  print $new_student->get_student_state();
  print '<br/>';
  print $new_student->get_student_zip();
  print '<br/>';
  print $new_student->get_student_age();
  print '<br/>';
  print '-----------------------------------------------------';
  print '<br/>';
  print $id_error == 'TRUE' ? 'Id update successful<br/>' :
    'Id update not successful<br/>';
  print $name_error == 'TRUE' ? 'Name update successful<br/>' :
    'Name update not successful<br/>';
  print $address_error == 'TRUE' ? 'Address update successful<br/>' :
    'Address update not successful<br/>';
  print $state_error == 'TRUE' ? 'State update successful<br/>' :
    'State update not successful<br/>';
  print $zip_error == 'TRUE' ? 'Zip update successful<br/>' :
    'Zip update not successful<br/>';
  print $age_error == 'TRUE' ? 'Age update successful<br/>' :
    'Age update not successful<br/>';
?>