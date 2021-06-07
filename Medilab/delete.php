<?php
include("connection.php");
	error_reporting(0);
	$rollno = $_GET['rn'];
	$query = "DELETE FROM document WHERE rollno='$rollno'";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<script>alert('Record Deleted')</script>";
		?>
		<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/Medilab/home.php">
		<?php
	}
	else{
		echo "<font color='red'>Sorry, Delete Process Failed";
	}
?>
