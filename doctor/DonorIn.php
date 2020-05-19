<?php 
	

	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: Login.php");
	}


	if (isset($_REQUEST['request']))
	{
		echo '<b>Requested</b>';
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor Information</title>
</head>
<body>
	<h3>Donor Information</h3><hr><br>
	<table border="1px">
		<tr>
			
			<th>U_id</th>
			<th>Donors_Name</th>
			<th>Donors_Age</th>
			<th>Donors_Address</th>
			<th>Donors_Phone</th>
			<th>Bl_Grp</th>
			<th>Last_donate_date</th>

			
		</tr>
		<tr>
			
			<td>2</td>
			<td>Asif</td>
			<td>28</td>
			<td>Dhanmondi</td>
			<td>0171453245</td>
			<td>A+</td>
			<td>3-2-2020</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Rahman</td>
			<td>36</td>
			<td>Banani</td>
			<td>0171455998</td>
			<td>O+</td>
			<td>7-1-2020</td>
		</tr>
	</table><br><br>
	<form method="post" action="">
		 User id:<br>
		<input type="text" name="uId" placeholder="  "><br><br>
 		<input type="submit" name="request" value="Request"><br><br>
 		<a href="DonorHis.php"><input type="button" name="checkHis" value="Check History"></a>
 		<br><br>
	</form>
	<a href="Logout.php"><h3>Logout</h3></a>
	   



</body>
</html>