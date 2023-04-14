<?php include '../../datafield/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
    <h1>Diagnostic<span>Lab</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href=" view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="../../index.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my">My<span class="mys">Appointment</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>Patient Name</th>
		<th>DATE & TIME</th>
		<th>Tests</th>
		<th>Address</th>
		<th>Contact No.</th>
		<th>Email</th>

		</tr>
		<!-- $sql3="SELECT  * FROM bookapp , doctor   WHERE patientID=('$userprofile') AND  docID=DoctorID " -->
		<?php $sql3="SELECT  * FROM bookAppointment book,user user WHERE book.Email= user.Email";
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["AppoID"]."</td><td>".$row3['Pname']."</td><td>".$row3["Date"]."</td><td>".$row3["Test"]."</td><td>".$row3['Address']."</td><td>".$row3['ContactNo']."</td><td>".$row3['Email']."</td><td>";
			}


			echo "</table";
	


		}

		?>
		
	</table>



</body>
</html>

