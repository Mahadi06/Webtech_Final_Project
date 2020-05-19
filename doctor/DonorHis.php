<?php	
	session_start();
	if(!isset($_COOKIE['username'])){  
		header("location: Login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Donor History</title>
</head>
<body>
	<h3>Donor History</h3><hr><br><br>
	<table border="1px">
		<tr>
			
			
			<th>Donate_Date</th>
			<th>Place</th>
			<th>Doanate_Count</th>
		</tr>
		<tr>
			
			<td>9-2-2020</td>
			<td>Popular Hospital,Dhanmondi</td>
			<td rowspan="3">3</td>
		</tr>
		<tr>
			
			<td>22-6-2019</td>
			<td>Apollo Hospital</td>
			
		</tr>
		<tr>
			
			<td>11-1-2019</td>
			<td>Dhaka Medical</td>
			
		</tr>
	</table>
	<br><br>
	<a href="Logout.php"><h3>Logout</h3></a>

</body>
</html>		


			
	