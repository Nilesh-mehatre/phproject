<?php include ('../../datafield/server.php');?>
<!DOCTYPE html>
<?php 
$mysqli = new mysqli("localhost", "root", "", "shri");
if(!isset($_SESSION['login_sess']))
{
	header("location: ../../loginfield/Ulogin.php");
}
$Name =$_SESSION['login_Name'];
$findresult = mysqli_query($mysqli, "SELECT * FROM `user` WHERE Name=('$Name')");
if($result = mysqli_fetch_array($findresult))
{
	$userName = $result['userName'];
	$Name = $result['Name'];
	$Address = $result['Address'];
	$ContactNumber = $result['ContactNumber'];
	$Email = $result['Email'];
    $olduserName = $result['userName'];
}
?>
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

<form method="post" action="t.php" class="patientsearch">

	<?php include ('../../datafield/errors.php') ;?>

	<div class="input-group">
		<label style="font-weight: bold; font-size: 30px">Search By:</label>
		<label style="font-weight: bold">*Patient ID</label>
		<label style="font-weight: bold">*Patient Name</label>
		<input type="text" name="AppoID4" >

	</div>

	<div class="input-group">
		<button type="submit" name="treatmentHistory" class="btn">Search</button>
	</div>
</form>


<?php  if (isset($_POST['treatmentHistory'])) {
			 ?>
		
         	<table class="table2">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>
		<tr>
		<th>Appointment ID</th>  ?>
		<th>Patient Name</th>
		<th>Treatment</th>
		<th>Note</th>	


		</tr> 
		
		<?php

		$Pname =$mysqli -> real_escape_string($_POST['AppoID4']);

		$sqlP2="SELECT  * FROM  des WHERE AppoID=('$Pname') OR Pname=('$Pname') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["AppoID"]."</td><td>".$rowP2["Pname"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table>";
	


		}
	}?>

 </table>


<?php
 if (isset($_POST['treatmentHistory'])) {
	header('../presentaionfield/users/myinfo.php');
?>

	<table class="table2" style="margin-top: -10px">
		<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd">Treatment History</caption>
		<tr>
			<th>Appointment ID</th> ?>
			<th>Patient Name</th>
			<th>Treatment</th>
			<th>Note</th>


		</tr>

	<?php
	// $AppoID =$mysqli -> real_escape_string($_POST['AppoID']);
	// $Pname =$mysqli -> real_escape_string($_POST['Pname']);
	// $sql11="SELECT  * FROM  description, staff WHERE descID=('$userprofile') AND doctorIDdesc=DoctorID" ;
	// $sql11 = "SELECT  * FROM  des ";
	$sql11 = "SELECT  * FROM  des WHERE AppoID='$AppoID' or Pname='$Pname' ";
	$result11 = $mysqli->query($sql11);
	if (mysqli_num_rows($result11) >= 1) {
		while ($row11 = $result11->fetch_assoc()) {

			echo "<tr><td>". $row11['AppoID'] ."</td><td>" . $row11['Pname'] . "</td><td>" . $row11['treatment'] . "</td><td>" . $row11['Note'] . "</td></tr>";
		}


		echo "</table>";
	}
}



	?>

	</table>










 












	






</body>
</html>

