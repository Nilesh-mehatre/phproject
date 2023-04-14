<?php include '../../datafield/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Panel</title>
	<link rel="stylesheet"  href="add.css">

	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css"> -->

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


	<div class="header" style="background-color: #423289;">
	<h2 style="background-color: #423289;">Add Appointment</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datafield/errors.php');?>





<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<div class="input-group">
   <label>Appointment ID</label>
   <input type="text" name="AppoID" style="padding: 15px; font-size: 20px;" >

</div>

<div class="input-group">
   <label>Patient Name</label>
   <input type="text" name="Pname" style="padding: 15px; font-size: 20px;" >

</div>

<!-- <div class="input-group">
   <label>Email</label>
   <input type="text" name="Email" style="padding: 15px; font-size: 20px;">
</div> -->

<div class="input-group">
   <label>Date</label>
   <input type="datetime-local" name="Date" style="padding: 15px; font-size: 20px;">
</div>

<div class="input-group">

   <label>Select Test:</label>
   <select name="test" id="test" class="input-group" style="width: 410px; padding: 5px; font-size: 20px;">
	   <option value=""></option>
	   <option value="CT Scan">Computed Tomography Scan</option>
	   <option value="MRI Scan">Magnetic resonance imaging Scan</option>
	   <option value="Blood Test">Blood Test</option>
	   <option value="ECG Test">Electrocardiogram Test</option>
	   <option value="EEG Test">Electroencephalogram Test</option>
	   <option value="Ultrasound Test">Ultrasound Test</option>
	   <option value="X-Rays">X-Rays</option>
	</select>

</div>

<div class="input-group">
   <label>Address</label>
   <input type="text" name="Address" style="padding: 15px; font-size: 20px;">
</div>

<div class="input-group">
   <label>Contact No.</label>
   <input type="text" name="Contact" style="padding: 15px; font-size: 20px;">
</div>

<div class="input-group">
   <button type="submit" name="Book1" class="btn" style="background-color: #423289;">BOOK</button>
</div>


</form>


</form>

</form>


<!-- <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script> -->
<script>
    new MultiSelectTag('test')  // id
</script>
</body>

</html>