<?php
  // Arrays
  $class_arrayA[0] = "CS122"; // class number
  $class_arrayA[1] = "Programming Concepts 1"; // class name
  $class_arrayA[2] = "Basic concepts of the PHP language."; // description
  $class_arrayA[3] = "B123"; // room
  $class_arrayA[4] = "Dr. Abraham Excel"; // instructor
  $class_arrayA[5] = 50; // number of students

  $class_arrayB[ ] = "CS122"; // class number
  $class_arrayB[ ] = "Programming Concepts 1"; // class name
  $class_arrayB[ ] = "Basic concepts of the PHP language."; // description
  $class_arrayB[ ] = "B123"; // room
  $class_arrayB[ ] = "Dr. Abraham Excel"; // instructor
  $class_arrayB[ ] = 50; // number of students

  $class_arrayC = array ("CS122",
    "Programming Concepts 1",
    "Basic concepts of the PHP language.",
    "B123", "Dr. Abraham Excel", 50);

  // Array keyword
  $class_arrayD["class number"] = "CS122";
  $class_arrayD["class name"] = "Programming Concepts 1";
  $class_arrayD["description"] = "Basic concepts of the PHP language.";
  $class_arrayD["room"] = "B123";
  $class_arrayD["instructor"] = "Dr. Abraham Excel";
  $class_arrayD["number of students"] = 50;

  $class_arrayE = array ("class number" =>"CS122",
    "class name" => "Programming Concepts 1",
    "description" => "Basic concepts of the PHP language.",
    "room" => "B123",
    "instructor" => "Dr. Abraham Excel",
    "number of students" => 50);
  
  // Multidimensional arrays
  $class_arrayF = array (
    array ("CS122", "Programming Concepts 1",
      "Basic concepts of the PHP language.",
      "B123", "Dr. Abraham Excel", 50),
    array ("CS123", "Programming Concepts 2",
      "Advanced concepts of the PHP language.",
      "B124", "Dr. Abraham Excel", 50));
?>
