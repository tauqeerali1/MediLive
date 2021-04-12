
<?php
	include("connection.php");
	error_reporting(0);
 	$_GET['rn'];
	$_GET['fv'];
 	$_GET['hp'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>show databses</title>
</head>
<body>
	<form action="" method="GET">
		Roll No<input type="text" name="rollno" value="<?php echo $_GET['rn']; ?>"/><br><br>
		Fever<input type="text" name="fever" value="<?php echo $_GET['fv']; ?>"/><br><br>
		Hospital<input type="text" name="hospital" value="<?php echo $_GET['hp']; ?>"/><br><br>
		<input type="submit" name="submit" value="Update">
	</form>
	<?php
	if($_GET['submit'])
	{
		$rollno = $_GET['rollno'];
		$fever = $_GET['fever'];
		$hospital = $_GET['hospital'];
		$query = "UPDATE document SET fever='$fever' , hospital='$hospital' WHERE rollno='$rollno' ";
		$data = mysqli_query($conn, $query);
		if($data){
			echo "<font color='green'>Record Update successfuly. <a href='home.php'>Check Updated List Here</a>";
		}
		else
		{
			echo "<font color='red'>Record Not Updated. <a href='home.php'>Check Updated List Here</a>";
		}
	}
	else{
		echo "<font color='blue'>Click on Update Button to save the changes";
	}
	?>

</body>
</body>
</html>