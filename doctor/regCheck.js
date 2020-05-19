function valName()
 		{
 			var valName = document.getElementById('name').value;
 			var nameError = document.getElementById('nameError');
 			if(valName.trim() == "")
 			{
 				 document.getElementById('nameError').innerHTML = 'Field is Empty';
 				return false;
 			}
 			else if(valName.length <5)
 			{
 				nameError.innerHTML = "at least 5 char required";
 			}
 			else
 			{
 				nameError.innerHTML = "";
				return true; 
 			}
 		}

 		function valUname()
 		{
 			var valUname = document.getElementById('uname').value;
 			var unameError = document.getElementById('unameError');
 			if(valUname.trim() == "")
 			{
 				document.getElementById('unameError').innerHTML = 'Field is Empty';
 				return false;
 			}
 			else if(valUname.length <5)
 			{
 				document.getElementById('unameError').innerHTML = 'At least five charecter needed';
 				return false;
 			}
 			else
 			{
 				document.getElementById('unameError').innerHTML = '';
 				return true;
 			}
 		}

 		function valEmail()
 		{
 			var valEmail = document.getElementById('email').value;
 			var emailError = document.getElementById('emailError');
 			if(valEmail.trim() !== "")
 			{
 				var parts = valEmail.split("@");
        		var dot = parts[1].indexOf(".");
        		if(dot == -1)
        		{
        			emailError.innerHTML = 'Invalid Email address';
 					return false;
        		}
        		else
	 			{
	 				emailError.innerHTML = '';
	 				return true;
	 			}
        		 							
 			}
 			else if(valEmail.trim() == "")
        		{
        			emailError.innerHTML =	"Field is empty";
 					return false;
        		}
 			else
 			{
 				emailError.innerHTML = '';
 				return true;
 			}
 		}

 		function valPhone()
 		{
 			var valPhone = document.getElementById('phone').value;
 			var phoneError = document.getElementById('phoneError');

 			if( valPhone.length < 8 || valPhone.length > 14)
 			{
 				phoneError.innerHTML = 'Not a valid phone number';
 				return false;
 			}
 			else
 			{
 				phoneError.innerHTML = '';
 				return true;
 			}
 		}
 		function valPass()
 		{
 			var valPass1 = document.getElementById('pass1').value;
 			var valPass2 = document.getElementById('pass2').value;
 			var passError1 = document.getElementById('passError1');
 			var passError2 = document.getElementById('passError2');
 			if(valPass1.length < 6)
 			{
 				passError1.innerHTML = "At least 6 charecter required";
 				return false;
 			}
 			if(valPass1 !== valPass2 && valPass1.length < 6)
 			{
				passError2.innerHTML = "Password is not matched";
 				return false;
 			}
 			if(valPass1 !== valPass2 && valPass1.length >= 6)
 			{
 				passError1.innerHTML = "";
				passError2.innerHTML = "Password is not matched";
 				return false;
 			}
 			else
 			{
				passError1.innerHTML = "";
				passError2.innerHTML = "";
 				return true;
 			}

 		}
 		function valGender()
 		{
 			var radio1 = document.getElementById('male').checked;
 			var radio2 = document.getElementById('female').checked;
 			var radio3 = document.getElementById('other').checked;
 			var genderError = document.getElementById('genderError');
 			if(radio1 == "" && radio2 == "" && radio3 == "" )
 			{
 				genderError.innerHTML = "Gender must be selected";
 				return false;
 			}
 			return true;
 		}
 		function valDegree()
 		{
 			var mbbs =document.getElementById('mbbs').checked;
			var md =document.getElementById('md').checked;
 			var fcps =document.getElementById('fcps').checked;
 			var frcs =document.getElementById('frcs').checked;
 			var mrcp =document.getElementById('mrcp').checked;
 			var frcp =document.getElementById('frcp').checked;
 			if(mbbs == "" && md == "" && fcps == "" && frcs == "" &&  frcp == "" && mrcp == "" )
 			{
 				degreeError.innerHTML = "At least a degree must be selected";
 				return false;
 			}
 			return true;	
 		}
 		function valExp()
 		{
			var valExp = document.getElementById('exp').value;
 			var expError = document.getElementById('expError'); 
 			if(valExp.trim() == "")
 			{
 				expError.innerHTML = "Enter your experience in years";
 				return false;
 			}
 			return true;			
 		}


 		function validate()
 		{
 			valName();
 			valUname();
 			valEmail();
 			valPhone();
 			valPass();
 			valGender();
 			valDegree();
 			valExp();
 			if(valName() && valUname() && valEmail() && valPhone() && valPass() && valDegree() && valExp())
 			{
 				return true;
 			}
 			else
 			{
 				return false;
 			}
 		}


