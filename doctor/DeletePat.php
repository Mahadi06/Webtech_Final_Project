<?php 

$id = $_GET['id'];

	$u1 = $_SESSION['user']['uid'];
	include("DB.php");
	$con = getConnection();
	$sql = "delete from patients where pid = '$id' ";
	$result = mysqli_query($con,$sql); 

	header("location: CurPat.php");

	echo "<script>alert('Deleted')<script/>";



 ?>