<?php include ('../../datafield/server.php');?>
<!DOCTYPE html>
<?php 
$mysqli = new mysqli("localhost", "root", "", "shri");
if(!isset($_SESSION['login_ses']))
{
	header("location: ../../loginfield/Slogin.php");
}
$Email =$_SESSION['login_email'];
$findresult = mysqli_query($mysqli, "SELECT * FROM `staff` WHERE email=('$Email')");
if($resultD = mysqli_fetch_array($findresult))
{
	$StaffID = $resultD['StaffID'];
	$Name = $resultD['Staff Name'];
	$Address = $resultD['Address'];
	$ContactNumber = $resultD['ContactNumber'];
	$Email = $resultD['email'];
	$Password = $resultD['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Panel</title>
	<link rel="stylesheet"  href="style3.css">
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1 >Diagnostic<span>Lab</span></h1>
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
<body >
<p style="text-align: center; font-size: 60px;">Hello, Mr.<span style="color: #423289; font-size: 60px; text-align: center;"><?php echo $resultD['Staff Name']; ?> </span></p>

	<div class="header">
	<h2>My Information</h2>
</div>
<form method="post" action="index2.php" class="info" style="width: 40%;">


 


<div class="Dcontent">

  
<label>Staff ID: <?php echo $resultD['StaffID']; ?></label>
    <br>
    <br>
	<label>Name: <?php echo $Name; ?></label>
	<br>
	<br>
	<label>Email: <?php echo $resultD['email']; ?></label>
	<br>
	<br>
	<label>Address: <?php echo $Address; ?></label>
	<br>
	<br>
	<label>Contact No.: <?php echo $ContactNumber; ?></label>
	<br>
	<br>
	<label>Password: <?php echo $Password; ?></label>
	 	   	
</div>

</form>


</body>
</html>