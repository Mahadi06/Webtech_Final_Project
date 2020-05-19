
 
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<style type="text/css">
		div{
				background-color: lightblue;
				width: 40%;
				padding-top: 25px;

		}
		#f1{

			
			padding-bottom: 30px;
			padding-top: 10px;
			}

		input{
			padding: 12px 15px;
			font-size: 15px;
		}

	</style>
</head>
<body>
	<center>
		<div>
			<h2>Login</h2>
		<form id="f1" method="post" action="logCheck.php"  onsubmit="return validate()"  >
			
	 		<input type="text" name="uname" id="uname" placeholder="Username" >	 		
			<br><span id="nameError"></span>
	 		<br><br>
	 			
	 		
	 		<input type="password" name="pass" id="pass" placeholder=" Password "><br>
	 		<span id="passError"></span>
	 		<br><br>
	 		<input type="submit" name="login" value="Login">
	 		<a href="Registration.php">Register</a>
			
		</form>
		</div>
	</center>
	<script type="text/javascript">
		function validate()
		{
			var varname = document.getElementById('uname').value;
			var varpass = document.getElementById('pass').value;

			var nameError = document.getElementById('nameError');
			var passError = document.getElementById('passError');

			if(varname.trim() == "")
			{
				nameError.innerHTML = "Username field is empty";
				return false;
			}
			if(varpass.trim() == "")
			{
				passError.innerHTML = "Password field is empty";
				return false;
			}
			else
			{
				return true;
			}
		}


	</script>
</body>
</html>