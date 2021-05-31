<?php
session_start();
error_reporting(0);
include("connection.php");
echo "Welcome ".$_SESSION['User'];
$userprofile = $_SESSION['User'];
if($userprofile==true)
{

}
else
{
	header('location:new_login.php');
}
$query = "SELECT * FROM document WHERE User='$userprofile'";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

	if($total !=0)
	{
	?>

		<table>
			<tr>
				<th>Documents</th>
				<th>Fever</th>
				<th>Hospital</th>
				<th colspan="2">Operation</th>
			</tr>
		

		<?php
			while ($result = mysqli_fetch_assoc($data))
			{
				echo "<tr>
						<td><a href='$result[picsource]'><img src='".$result['picsource']."' height='100' width='100'/></a></td>
						<td>".$result['fever']."</td>
						<td>".$result['hospital']."</td>
						<td><a href = 'update.php?rn=$result[rollno]&fv=$result[fever]&hp=$result[hospital]'>Edit</a></td>
						<td><a href = 'delete.php?rn=$result[rollno]' onclick='return checkdelete()'>Delete</a></td>
					</tr>";
			}
		}
		else
		{
			echo "no record found";
		}

		?>
<table>
		<script>
			function checkdelete()
			{
				return confirm('Are you sure you want to delete this data?');
			}
		</script>


<br>
<br>

.<a href="logout.php">Logout</a>
