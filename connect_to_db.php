<?php
  

  //connecting to database  

  $db_host = "localhost";
  $db_username = "root";
  $db_password = "";
  $db_name = "";

  $connection = @mysqli_connect ($db_host, $db_username, $db_password, $db_name); 
  if(mysqli_connect_errno())
  {
   echo "<h4>Failed to connect to MySQL: </h4>".mysqli_connect_error();
  }
  else
  {
    echo "<h4>Successfully connected to MySQL: </h4>";
  }

  /*mysqli_connect($db_host, $db_username,$db_password) or die(mysql_error());
  mysqli_select_db($db_name) or die("no database by that name");*/
?>
