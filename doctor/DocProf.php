<?php 

session_start();
if(!isset($_COOKIE['username']))
	{  
		header("location: Login.php");
	}
	


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor's Profile</title>
</head>
<body>
	<center><h3>My Profile</h3></center><hr><br>


</body>
</html>

<?php 
$uname = $_COOKIE['username'];
  $handle = fopen('data.txt', 'r');
while (!feof($handle)) 
			{
				$data = fgets($handle);
				$data = explode('|', $data);

				if( trim($data[0]) == $uname)
				{	
					echo 'Username:'.$data[0].'<br>';
					echo 'Password:'.$data[1].'<br>';
					echo 'Gender:'.$data[2].'<br>';
					echo 'Email:'.$data[3].'<br>';
					echo 'Name:'.$data[4].'<br>';
					echo 'Speciality:'.$data[5].'<br>';
					echo 'Experience:'.$data[6].'<br>';
					echo 'Qualification:'.$data[7].'<br>';
					
					
					break;
				}
				
			}
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>
	<fieldset >
 	<legend ><h3>Update Profile</h3></legend>
 	<form method="POST" action="" align = 'center'>
 		<table>
 			<tr>
 				<td>Name</td>
 				<td><input type="text" name="name" placeholder="Enter your name"> </td>
 			</tr>
 						<tr><td></td><td></td></tr>
 			<tr>
 				<td>User Name</td>
 				<td><input type="text" name="uname" placeholder="Enter your user name"><br></td>
 			</tr>
 			 			<tr><td></td><td></td></tr>

 			<tr>
 				<td>Email</td>
 				<td><input type="text" name="email" placeholder="Enter your email address"><br></td>
 			</tr>
 			 			<tr><td></td><td><h4></td></tr>

 			<tr>
 				<td>Phone no.</td>
 				<td><input type="text" name="phone" placeholder="Enter your phone number"><br></td>
 			</tr>
 			 			<tr><td></td><td>  </td></tr>

 			<tr>
 				<td>Password</td>
 				<td><input type="password" name="pass1" placeholder="Enter your password"><br></td>
 			</tr>
 			 			<tr><td></td><td></td></tr>

 			<tr>
 				<td>Confirm Password</td>
 				<td><input type="password" name="pass2" placeholder="Confirm your password"><br></td>
 			</tr>
 			 			<tr><td></td><td></td></tr>

 			<tr>
 				<td>Gender </td>
 				<td><input type="radio" name="gender" value="male" > Male
 					<input type="radio" name="gender" value="female"> Female
 					<input type="radio" name="gender" value="other" > Other
 					 
 				</td>
 			</tr>	
 			 			<tr><td> </td><td></td></tr>

 			
 			<tr>
				<td>Speciality</td>
				<td>
					<select name="spec">
						<option value="surgery" > Surgery  </option>
						<option value="medicine"> Medicine </option>
						<option value="cardiology"> Cardiology </option>
						<option value="dermatology"> Dermatology </option>
						<option value="neurology"> Neurology </option>
						<option value="nephrology"> Nephrology </option>
						<option value="orthopedic"> Orthopedic </option>
					</select>
				</td>
 			</tr>
 			 			<tr><td></td><td></td></tr>

 			<tr>
 				<td >Qualification </td>
 				<td>
 					<br><input type="checkbox" name="mbbs" value="MBBS">MBBS 
					<input type="checkbox" name="fcps" value="FCPS">FCPS <br>		
					<input type="checkbox" name="md" value="MD">MD 
					<input type="checkbox" name="mrcp" value="MRCP">MRCP 
					<input type="checkbox" name="frcp" value="FRCP">FRCP <br>
					
					<input type="checkbox" name="frcs" value="FRCS"> FRCS <br>	
					<h4></h4>
				</td>
 			</tr>
 			 			<tr><td></td><td></td></tr>

 			<tr>
 				<td>Experince</td>
 				<td><input type="number" name="exp" placeholder="Experince in years"><br></td>
 			</tr>
 			 			<tr><td></td><td></td></tr>
 			 <tr>
 				<td>Availability</td>
 				<td>
 					<select>
 						<option value="available" > Yes  </option>
						<option value="notAvailable"> No </option>
 					</select>
 				</td>
 			</tr>
 			 			<tr><td></td><td></td></tr>

 			<tr>
 				<td><input type="submit" name="update" value="Update"></td>
 				<td><a href="Logout.php">Logout</a></td>
 				
 			</tr>

 			
 		</table>
 		
 		

 	</fieldset>
 	</form>	

</body>
</html>
 </body>
 </html>