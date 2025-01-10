<?php
	//LOCAL CONNECTION
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "student_reg_db";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) 
{
die("Database Connection Failed Check Username, Password, Db name: " . mysqli_connect_error());
}	
?>
								