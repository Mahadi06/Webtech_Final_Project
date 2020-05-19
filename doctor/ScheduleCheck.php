<?php 
	include("DB.php");
	session_start();

	$uid = $_SESSION['user']['uid'];

	function validate($str)
	{
		return trim(htmlspecialchars($str));
	}

	if(isset($_POST['add']))
	{
		$date =  $_POST['date'] ;
		$fTime =  $_REQUEST['fTime'] ;
		$tTime =  $_REQUEST['tTime'] ;
		$hName = validate($_REQUEST['hName']);
		$hArea = validate($_REQUEST['hArea']);
		$hSection = validate($_REQUEST['hSection']);
		$hRoad = validate($_REQUEST['hRoad']);
		$hHouse = validate($_REQUEST['hHouse']);

		if(empty($date) && empty($fTime) && empty($tTime) && empty($hName) && empty($hArea) && empty($hSection) && empty($hRoad) && 
			empty($hHouse))
		{
			echo "<h3>All boxes must be filled up...<h3/>";
		}
		else
		{
			$con = getConnection();
			$sql = "INSERT INTO `schedule`(`Date`, `From`, `To`, `Hospital_Name`, `Area`, `Section`, `Road`, `House`, `uid`) VALUES ('$date','$fTime','$tTime','$hName','$hArea','$hSection','$hRoad','$hHouse','$uid')";
			$result = mysqli_query($con, $sql);

			 echo "<script>alert('Appointment Schedule added')</script>";
			 header("location:Schedule.php");
		}


	}


 ?>