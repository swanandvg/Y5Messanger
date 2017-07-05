<?php

/*$con = mysqli_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("db_wmb", $con);*/

// Create connection
$con=mysqli_connect("localhost","root","","db_wmb");

// Check connection
if (mysqli_connect_errno())
  {
  die('Could not connect: ' . mysqli_connect_error());
  }
?> 
