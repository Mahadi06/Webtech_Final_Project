<?php
	
	session_start();
	$uid = $_SESSION['user']['uid'];
	
	if(!isset($_COOKIE['user'])){  
		header("location: Login.php");
	}

 if (isset($_REQUEST['accept']))
 {
 	echo '<h3>Request Accepted</h3>';
 }  
 if (isset($_REQUEST['reject']))
 {
 	echo '<h3>Request Rejected</h3>';
 }  

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Requested Appointment</title>
</head>
<body>
	<center><h2>Requested Appointment</h2></center><hr>
	<table border="3px">
		<tr>
			<th>App_id</th>
			<th>Date</th>
			
			<th>Patients_Name</th>
			<th>Patients_Age</th>
			<th>Patients_Address</th>
			<th>Patients_Phone</th>
		</tr>
		<tr>
			<td>1</td>
			<td>9-3-2020</td>
			<td>Fahim</td>
			<td>36</td>
			<td>Nikunja-2</td>
			<td>01896412563</td>

		</tr>
		<tr>
			<td>2</td>
			<td>21-3-2020</td>
			<td>Shamim</td>
			<td>29</td>
			<td>Dhanmondi</td>
			<td>01963124563</td>

		</tr>
	</table><br><br>
	<form method="post" action="">
		Appointment id:<br>
		<input type="text" name="appId" placeholder="  "><br><br>
 		<input type="submit" name="accept" value="Accept"><br><br>

 		<input type="submit" name="reject" value="Reject"><br><br>
	</form>
	<a href="Logout.php"><h3>Logout</h3></a>
		



</body>
</html>