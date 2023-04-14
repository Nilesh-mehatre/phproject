<?php include '../../datafield/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
	<link rel="stylesheet"  href="add.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 style="color: #423289;">Diagnostic<span>Lab</span></h1>
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


	
<form method="post" action="cancel.php">

	<?php include ('../../datafield/errors.php') ;?>

	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID2" >

	</div>

	<div class="input-group">
		<button type="submit" name="cancel" class="btn" style="background-color: #423289;">Cancel</button>
	</div>

	







		</form>
	</form>


</body>
</html>


