<?php 
	require('DB.php');
	session_start();
	$boxError = '';
	$quaError = '';
	$genderError = '';
	$nameError = '';
	$phoneError = '';
	$emailError = '';
	$passError = '';
	$unameError = '';
	$qua='';
	$expError = '';



	function validate($str)
	{
		return trim(htmlspecialchars($str));
	}


	if (isset($_REQUEST['register'])) 
	{
		$name =  validate($_REQUEST['name']) ;
		$uname = validate($_REQUEST['uname']) ;
		$email = validate($_REQUEST['email']) ;
		$phone = validate($_REQUEST['phone']) ;
		$pass1 = validate($_REQUEST['pass1']) ;
		$pass2 = validate($_REQUEST['pass2']) ;
		$spec = $_REQUEST['spec'];
		$exp = $_REQUEST['exp'];
		$ql = $_POST['ql'];
		  


		// boxes are empty
		if(empty($phone) || empty($name) || empty($uname) || empty($pass1) || empty($pass2) || empty($email) || empty($exp) || empty($spec))
		{
			$boxError = '<h3>All boxes must be filled up</h3>';
			echo $boxError;
		}

		//qulification vaidation
		$chk="";  
		foreach($ql as $chk1)  
		   {  
		      $chk .= $chk1.",";  
		   }  
		if( empty($chk))
		{
			
		 	 $quaError ='<p>Qualification is required</p>';

		 	 echo $quaError;
		 }
		// else
		// {
		// 	$ql = implode(',',$_POST['ql'] );
		// }


		//gender validation
		if(empty($_POST['gender']))
			{
				
			 $genderError =	"<p>Gender is required</p>";
			 echo $genderError;
			 
			}
			else { $gender = $_POST['gender'];}
// name validation
		


		if (!preg_match('/^[a-zA-Z0-9\s]+$/', $name)) 
		{
			$nameError = '<p>Name can only contain letters, numbers and white spaces</p>';
			echo $nameError;
		}	
	//phone number validation
		if(!is_numeric($phone))
		{
			$phoneError = '<p>Only numeric value is allowed for Phone number</p>';
			echo $phoneError;
		}
		 elseif(strlen($phone)<9 || strlen($phone)>14)
		 {
		 	$phoneError = '<p>Not a valid phone number</p>';
		 	echo $phoneError;
		 }

		 //email validation
		 if(!filter_var($email,FILTER_VALIDATE_EMAIL) ) 
		 {
		 		$emailError = '<p>Not a valid email address</p>';
		 		echo $emailError;		 
		 }	

		 //password validation
		 if($pass1 !== $pass2)
		 {
		 	$passError = '<p>Password is not matched</p>';
		 	echo $passError;
		 }

		 if (strlen($pass1) <6 || strlen($pass2)<6) 
		 {
		 	$passError = '<p>Password must be at least 6 keywors</p>';
		 	echo $passError;
		 }

		 //uname validation
		 if(strlen($uname) <5)
		 {
		 	$unameError = '<p>User name must be at least 5 character</p>' ;
		 	echo $unameError;
		 }
		 //exp validation
		 if(empty($exp))
		 {
		 	$expError = '<p>Experince can not be empty</p>';
		 	echo $expError;
		 }

		 //speciality validation


		if($boxError == '' && $quaError == '' &&  $genderError == '' && $nameError == '' && $phoneError == '' && $emailError == '' && 
			$passError == '' && $unameError == '' && $expError == '')
		{
			// $data = $uname.'|'.$pass1.'|'.$gender.'|'.$email.'|'.$phone.'|'.$name.'|'.$spec.'|'.$exp.'|'.$qua."\n\r";

			$con = mysqli_connect('localhost', 'root','', 'webtech');

		 	$sql = "INSERT INTO `users`(`Name`, `Username`, `Email`, `Phone`, `Password`, `Gender`, `Speciality`, `Qualification`, `Experience`) VALUES ('$name','$uname','$email','$phone','$pass1','$gender','$spec','$chk','$exp')";

		 	$result = mysqli_query($con, $sql);

			 echo '<h2>Registered</h2>';				
		}
		else{
			echo "<br><a href='Registration.php'>Go Back to Registration</a>";
		}	 

	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<style type="text/css">
 		p,h3{
 			font-size: 18px;
 			color: red;
 		}

 		body{
 			margin: 30px 30px;
 		}

 		a{
 			background-color: steelblue;color: white;
		padding: 20px 20px;
		font-size: 18px;
		font-weight: bold;  
		text-decoration: none;
		text-align: center;
 		}

 	</style>
 </head>
 <body>
 
 </body>
 </html>