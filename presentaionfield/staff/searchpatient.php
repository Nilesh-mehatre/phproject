<?php include '../../datafield/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Panel</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Diagnostic<span>Lab</span></h1>
		<nav>
		


		
		<ul> 
		    <li><a href="index2.php">My Info</a></li>
		    <li><a href="book.php">Add Appointment</a></li>
			<li><a href="doctorapp.php">Appointments</a></li>
			<li><a href="cancel.php">Cancel Appointment</a></li>
			<li><a href="searchpatient.php">Search Patient</a></li>
			<li><a href="addD.php">Add Description</a></li>
			<li><a href="../../index.php">Logout</a></li>


		</ul>
		



	</nav>




</header>

<body>


	
<form method="post" action="searchpatient.php" class="patientsearch">

	<?php include ('../../datafield/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Patient ID</label>
		<label style="font-weight: bold">*Patient Name</label>
		<input type="text" name="PID" >

	</div>

	<div class="input-group">
		<button type="submit" name="SearchP" class="btn">Search</button>
	</div>

	







		</form>
	</form>


	

		<?php 

         if (isset($_POST['SearchP'])) {

         ?>	<table class="table3" >
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Patient Information</caption>>

		<tr>
		<th>Appointment ID</th>
		<th>Patient Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>
		<th>Test</th>


		</tr> <?php  


		$PID =$mysqli -> real_escape_string($_POST['PID']);

		$sqlP="SELECT  * FROM  bookAppointment   WHERE 	Pname=('$PID') OR AppoID=('$PID') " ;
		$resultP=$mysqli->query($sqlP);
		if(mysqli_num_rows($resultP)==1){
			while ($rowP=$resultP->fetch_assoc()) {

				echo "<tr><td>".$rowP["AppoID"]."</td><td>".$rowP["Pname"]."</td><td>".$rowP["Address"]."</td><td>".$rowP["ContactNo"]."</td><td>".$rowP['Email']."</td><td>".$rowP['Test']."</td></tr>";
			}


			echo "</table";
	


		}
	}?>
 </table>
			<?php 	
				 if (isset($_POST['SearchP'])) {

         ?>	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>>
		<tr>
		<th>Appointment ID</th>
		<th>Patient Name</th>
		<th>Treatment</th>
		<th>Note</th>	


		</tr> <?php  
		$AppoID =$mysqli -> real_escape_string($_POST['AppoID']);
		$Pname =$mysqli -> real_escape_string($_POST['Pname']);
        $sqlP2 = "SELECT  * FROM  des WHERE AppoID='$AppoID' or Pname='$Pname' ";


		// $PID =$mysqli -> real_escape_string($_POST['PID']);
        
		// $sqlP2="SELECT  * FROM  des   WHERE AppoID=('$PID') OR Pname=('$PID') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["AppoID"]."</td><td>".$rowP2["Pname"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table>";
	


		}
	}?>
 </table>
	


</body>
</html>


