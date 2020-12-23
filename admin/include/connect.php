<?php 

/*$con=@mysqli_connect("localhost","root","");
if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
mysqli_select_db("mydoctor_db", $con);*/




$conn = mysqli_connect("localhost","root","","mydoctor_db");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();

}

?>