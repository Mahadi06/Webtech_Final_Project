<?php 
	include("DB.php");
	session_start();
	if(!isset($_COOKIE['user'])){  
		header("location: Login.php");
	}

		$u1 = $_SESSION['user']['uid'];
		$con = getConnection();
		
		$sql = "select * from schedule where uid = '$u1'";
		$result = mysqli_query($con, $sql);
	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Schedule Information</title>
 	<style type="text/css">
 		fieldset
 		{
 			width: 40%;
 			margin-left: auto;margin-right: auto;
		}
		span{ color: red; }
		table{
	border-collapse: collapse;
	width: 20%;
	text-align: center;

	
}
table,th,td{
	border: 1px solid gray;
}

th{   height: 30px;  
	background-color: midnightblue;
	color:white;
	font-size: 25px;
 }
th,td{
	padding: 5px 10px;
	
}
#s1{
	right: 40px;
	position: absolute;
}
 	</style>
 </head>
 <body>
     <h2 style="color: midnightblue">Current Schedule</h2>

    <input type="text" name="" id="s1" placeholder="search" onkeyup="return search()">

<div id="div1">
 	<table border="1px">
		<tr>
			
			<th>Date</th>
			<th>From</th>
			<th>To</th>
			<th>Hospital Name</th>
			<th>Area</th>
		
		
			
			<th>Section</th>
			<th>Road</th>
			<th>House no.</th>
			<th>Action</th>
		</tr>
			<?php	while($row = mysqli_fetch_assoc($result)){ ?>

		<tr>
			<td><?=$row['Date']?></td>
			<td><?=$row['From']?></td>
			<td><?=$row['To']?></td>
			<td><?=$row['Hospital_Name']?></td>
			<td><?=$row['Area']?></td>
			<td ><?=$row['Section']?></td>
			<td><?=$row['Road']?></td>
			<td><?=$row['House']?></td>
			<td>
				<a href="update.php?id=<?=$row['sid']?>&date=<?=$row['Date']?>&from=<?=$row['From']?>&to=<?=$row['To']?>&
					hn=<?=$row['Hospital_Name']?>&area=<?=$row['Area']?>&sec=<?=$row['Section']?>&
					road=<?=$row['Road']?>&house=<?=$row['House']?>"  >Update</a> |
					
				<a href="delete.php?id=<?=$row['sid']?>" >Delete</a> 
			</td>
		</tr>
		<?php } ?>
	</table>
</div>


 	
 	<br><br>

 	<form method="post" action="ScheduleCheck.php" onsubmit="return validate()">
 		<fieldset>
 			<LEGEND>Appointment Schedule</LEGEND>
 			Date <br>
			 	<input type='Date' name="date" id="date">
			 	<br><span id="derror"></span>
			 	<br><br>
			 	From <br>
			 	<input type='time' name="fTime"  id="fTime">
			 	<br><span id="fterror"></span>
			 	<br><br>
			 	To <br>
			 	<input type='time' name="tTime" id="tTime">
			 	<br><span id="tterror"></span>
			 	<br><br>
			 	Hospital/Clinic's Name <br>	
			 	<input type='text' name="hName"  id="hName">
			 	<br><span id="nerror"></span><br>
 		
 			<h4>Hospital/Clinic's Address</h4>
 				Area <br>	
			 	<input type='text' name="hArea" id="hArea">
			 		<br><span id="aerror"></span>
			 		<br>
			 	Section <br>	
 				<input type='text' name="hSection" id="hSection">
 					<br><span id="secerror"></span>
 					<br>
 				Road no. <br>	
 				<input type='text' name="hRoad" id="hRoad">
 					<br><span id="rerror"></span>
 					<br>
 				House no. <br>	
 				<input type='text' name="hHouse" id="hHouse"><br>
 				<span id="herror"></span>
 					<br>
 					
 		
 				<br>
 				<input type="submit" name="add" value="Add Schedule" >

 		</fieldset>
 		
 	</form>
 	<div id="123"></div>

 	<script type="text/javascript">
 		
 		function validate()
 		{
 			var date = document.getElementById('date').value;
 			var fTime = document.getElementById('fTime').value;
 			var tTime = document.getElementById('tTime').value;
 			var hName = document.getElementById('hName').value;
 			var hArea = document.getElementById('hArea').value;
 			var hRoad = document.getElementById('hRoad').value;
 			var hHouse = document.getElementById('hHouse').value;
 			var hSection = document.getElementById('hSection').value;
 			
 			if(date == "")
			{
				document.getElementById('derror').innerHTML = "Date can not be empty";
				return false;
			}
			if(fTime == "")
			{
				document.getElementById('fterror').innerHTML = "Time can not be empty";
				return false;
			}
			if(tTime == "")
			{
				document.getElementById('tterror').innerHTML = "Time can not be empty";
				return false;
			}


 			if(hName.trim() == "")
			{
				document.getElementById('nerror').innerHTML = "Hospital/Clinic's name can not be empty";
				return false;
			}
			if(hArea.trim() == "")
			{
				document.getElementById('aerror').innerHTML = "Hospital/Clinic's area can not be empty";
				return false;
			}
			if(hSection.trim() == "")
			{
				document.getElementById('secerror').innerHTML = "Hospital/Clinic's Section can not be empty";
				return false;
			}
			if(hRoad.trim() == "")
			{
				document.getElementById('rerror').innerHTML = "Hospital/Clinic's road no. can not be empty";
				return false;
			}
			if(hHouse.trim() == "")
			{
				document.getElementById('herror').innerHTML = "Hospital/Clinic's House no. can not be empty";
				return false;
			}
			return true;
 		}

 		function search(){
			var search = document.getElementById("s1").value;

			if(search.length>0)
			{
				var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('div1').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "SearchSchedule.php?key="+search, true);
			xhttp.send(); 
			}
			
		}
 	</script>
 	
 	
 
 </body>
 </html>