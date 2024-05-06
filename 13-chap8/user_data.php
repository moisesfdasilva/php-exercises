<?php
  class user_data
  {
    function __construct()
    {
      $mysqli =mysqli_connect($server, $db_username, $db_password, $database);
      if (mysqli_connect_errno())
      {
        throw new Exception("MySQL connection error: " . mysqli_connect_error());
      }
      $sql="SELECT * FROM Users"; // Change the table used
      $result=mysqli_query($con, $sql);
      If($result===null)
      {
        throw new Exception("No records retrieved from Database");
      }
      $valid_useridpasswords = mysqli_fetch_assoc($result); // change the array used
      mysqli_free_result($result);
      mysqli_close($con);
    }
    function __destruct()
    {
      
    }
  }
?>