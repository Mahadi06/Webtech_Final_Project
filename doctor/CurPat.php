<?php 
	session_start();
	include("DB.php");

	$uid = $_SESSION['user']['uid'];
if(!isset($_COOKIE['user']))
	{  
		header("location: Login.php");
	}

if (isset($_REQUEST['delete']))
 {
 	echo '<h2>Patient Deleted</h2>';
 }

 
 	$con = getConnection();
		
	$sql = "select * from patients where uid = '$uid'";
	$result = mysqli_query($con, $sql);
 
	



 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Current Patients</title>
	<style type="text/css">
		th{background-color: midnightblue;
			color: white;
		}
	</style>
</head>
<body>
	<h3>Current Patients</h3><hr>
	<table border="1px solid ">
		<tr>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Blood_Group</th>
			<th>Address</th>
			<th>Phone no.</th>
			<th>Email</th>
			<th>Delete</th>
			
		</tr>
				<?php	while($row = mysqli_fetch_assoc($result)){ ?>
		<tr>
			<td><?=$row['Name']?></td>
			<td><?=$row['Age']?></td>
			<td><?=$row['Gender']?></td>
			<td><?=$row['Blood_Group']?></td>
			<td><?=$row['Address']?></td>
			<td ><?=$row['Phone']?></td>
			<td><?=$row['Email']?></td>
			<td><a href="DeletePat.php?id=<?=$row['pid']?>">Delete</a></td>
		</tr>
		<?php } ?>
	</table>

	

</body>
</html>