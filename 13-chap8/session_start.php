<?php
  session_start();
  if ((!isset($_SESSION['username'])) || (!isset($_SESSION['password'])))
  {
    echo "You must login to access the ABC Canine Shelter Reservation System";
    echo "<p>";
    echo "<a href='login.php'>Login</a> | <a href='register.php'>
      Create an account</a>";
    echo "</p>";
  }
  else
  {
    echo "<p>Welcome back, " . $_SESSION['username'] . "</p>";
  }
?>