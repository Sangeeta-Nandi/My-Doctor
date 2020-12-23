<?php 
//$conn = @mysql_connect("localhost","root","");
//
//$db = mysql_select_db('mydoctor_db',$conn);

$con = mysqli_connect("localhost","root","","mydoctor_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>