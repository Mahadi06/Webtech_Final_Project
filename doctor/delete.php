<?php 
	
	$id = $_GET['id'];
	include("DB.php");
	$con = getConnection();
	$sql = "delete from schedule where sid = '$id'";
	$result = mysqli_query($con,$sql); 

	header("location: Schedule.php");

	echo "<script>alert('Deleted')<script/>";



 ?>