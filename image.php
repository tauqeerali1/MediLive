<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="uploadfile" value=""/>
		<input type="submit" name="submit" value="uploadfile"/>
	</form>
</body>
</html>
<?php

$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "documents/".$filename;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='100' width='100'/>";
?>