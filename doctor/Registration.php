

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<script src="regCheck.js"></script>
	<style type="text/css">
		
		div
		{
			
			/*position:absolute;
			left: 200px;right: 0px;
			margin: auto;*/

		} 
		td{
			padding: 8px 5px ;

		}
		.error{
			color:red;
		}
		#f1{
			}
		#h3{
			color: steelblue;
			border: 1px solid green;
			padding: 15px ;
			font-size: 25px;
			font-weight: bold;  
		}
		form
		{
			background-color: lightgray;
			width: 50%;
			padding: 10px 0px 10px 10px;
			margin-left: ;
			border: 5px solid red;
			position:absolute;
			left: 300px;
		}	


	</style>
</head>
<body>
	
	
	
 	<center><h3 id="h3">Registration</h3></center>
 	<div>
 	<form method="POST" action="regCheck.php" id="f1" onsubmit="return validate()"  >
 		<table>
 			<div class="input">
	 			<tr>
	 				<td>Name</td>
	 				<td><input type="text" name="name" id="name" placeholder="Enter your name" onkeyup="return valName()"> </td>
	 				<td><span class="error" id="nameError"></span></td>
	 			</tr>
 			</div>
  					
 			<tr>
 				<td>User Name</td>
 				<td><input type="text" name="uname" id="uname" placeholder="Enter your user name" onkeyup="return valUname()"></td>
 				<td><span class="error" id="unameError">                               </span></td>
 			</tr>

 			<tr>
 				<td><label for="email">Email</label></td>
 				<td><input type="email" name="email" id="email" placeholder="Enter your email address"></td>
 				<td><span class="error" id="emailError"></span></td>
 			</tr>

 			<tr>
 				<td>Phone no.</td>
 				<td><input type="number" name="phone" id="phone" placeholder="Enter your phone number" onkeyup="return valPhone()"></td>
 				<td><span id="phoneError" class="error"></span></td>
 			</tr>

 			<tr>
 				<td>Password</td>
 				<td><input type="password" name="pass1" id="pass1" placeholder="Enter your password"onkeyup="return valPass()"></td>
 				<td><span id="passError1" class="error"></td>
 			</tr>

 			<tr>
 				<td>Confirm Password</td>
 				<td><input type="password" name="pass2" id="pass2" placeholder="Confirm your password"onkeyup="return valPass()"></td>
 				<td><span id="passError2" class="error"></td>
 			</tr>

 			<tr>
 				<td>Gender </td>
 				<td><input type="radio" name="gender" value="male"	 id="male" > Male
 					<input type="radio" name="gender" value="female" id="female"> Female
 					<input type="radio" name="gender" value="other" id="other" > Other
 					 
 				</td><td><span id="genderError" class="error"></span></td>
 			</tr>	

 			
 			<tr>
				<td>Speciality</td>
				<td>
					<select name="spec" >
						<option value="surgery" > Surgery  </option>
						<option value="medicine"> Medicine </option>
						<option value="cardiology"> Cardiology </option>
						<option value="dermatology"> Dermatology </option>
						<option value="neurology"> Neurology </option>
						<option value="nephrology"> Nephrology </option>
						<option value="orthopedic"> Orthopedic </option>
					</select>
				</td><td></td>
 			</tr>

 			<tr>
 				<td >Qualification </td>
 				<td>
 					<br><input type="checkbox" name="ql[]" id="mbbs" value="MBBS">MBBS 
					<input type="checkbox" name="ql[]" id="fcps" value="FCPS">FCPS <br>		
					<input type="checkbox" name="ql[]" id="md" value="MD">MD 
					<input type="checkbox" name="ql[]" id="mrcp" value="MRCP">MRCP 
					<input type="checkbox" name="ql[]" id="frcp" value="FRCP">FRCP <br>
					
					<input type="checkbox" name="ql[]" id="frcs" value="FRCS"> FRCS <br>	
				
				</td>
				<td><span id="degreeError" class="error"></span></td>
 			</tr>

 			<tr>
 				<td>Experince</td>
 				<td><input type="number" name="exp" id="exp" placeholder="Experince in years"></td>
 				<td><span id="expError"  class="error"></span></td>
 			</tr>

 			<tr>
 				<td><input type="submit" name="register" value="Register"></td>
 				<td><a href="Login.php">Login</a></td><td></td>
 				
 			</tr>

 			
 		</table>
 		
 		
 		</form>	
 	
 	
 	</div>
 	
 	

</body>
</html>

























