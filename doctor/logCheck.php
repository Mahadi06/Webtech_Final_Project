<?php 
 	session_start();
	include("DB.php");
	
	
	function validate($str) 
	{
		return trim(htmlspecialchars($str));
	}

	$count = 0;

	if (isset($_REQUEST['login'])) 
	{
		$uname =  validate($_REQUEST['uname']) ;
		$pass = validate($_REQUEST['pass']) ;

		if(empty($uname) || empty($pass))
		{	
			echo 'Null Submission found';
			
			
		}
		else
		{
			$con = getConnection();
			$sql = "select * from users where Username='{$uname}' and Password='{$pass}'";
			$result = mysqli_query($con, $sql);
			$user = mysqli_fetch_assoc($result);

			if(count($user) > 0 )
			{
				$_SESSION['user'] = $user;
				setcookie('user', $uname, time()+3600, '/');
				header("location: Dashboard.php");
			}
			else
			{
				echo "invalid username/password";
			}
		
		}
	}

 ?> 

 