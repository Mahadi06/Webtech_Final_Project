<?php	
	session_start();
	if(!isset($_COOKIE['user'])){  
		header("location: Login.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<center><h1>Welcome Home</h1></center>
	<center><h3><?= $_SESSION['user']['Name']?></h3></center>
	<hr>
	<a href="Schedule.php"><input type="button" name="scheduleIn"  value="Schedule Information"></a>
	<br><br>
	<a href="ReqApp.php"><input type="button" name="reqApp"  value="Requested Appointment"></a>
	<br><br>
	<a href="DonorIn.php"><input type="button" name="donorIn"  value="Donor Information"></a>
	
	<br><br>
	<a href="CurPat.php"><input type="button" name="curPat"  value="Current Patients List"></a>
	<br><br>
	<a href="DocProf.php"><input type="button" name="docProf"  value="My Profile"></a>




	<a href="Logout.php"><h3>Logout</h3></a>


</body>
</html>