<?php
	include("connection.php");
	error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>show databses</title>
</head>
<body>
	<form action="" method="GET">
		Roll No<input type="text" name="rollno" value=""/><br><br>
		Fever<input type="text" name="fever" value=""/><br><br>
		Hospital<input type="text" name="hospital" value=""/><br><br>
		<input type="submit" name="submit" value="submit">
	</form>
	<?php
	if($_GET['submit']){


	$rn = $_GET['rollno'];
	$fv = $_GET['fever'];
	$hp = $_GET['hospital'];
	if($rn!="" && $fv!="" && $hp!="")
	$query ="INSERT INTO document VALUES ('$rn', '$fv', '$hp')";
	$data = mysqli_query($conn, $query);
	if ($data) {
		echo "Data inserted into database";
	}
	else
	{
		echo "All fields are required";
	}
	}
	?>

</body>
</body>
</html>