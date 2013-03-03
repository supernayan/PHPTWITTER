<?php
$con=mysqli_connect("localhost:3306","root","banana","twitter");

// Check connection
if (mysqli_connect_errno($con))
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

 mysqli_close($con);
?>