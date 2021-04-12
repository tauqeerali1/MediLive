<?php
$servername   = "localhost";
$username = "root";
$password = "9636463361";
$database = "document";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if($conn)
{
   echo "";
}
else
{
	die("connection failed bechause " .mysqli_connect_error());
}

?>