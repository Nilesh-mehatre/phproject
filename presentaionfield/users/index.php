
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
	$_SESSION['email'] =  $result['Email'];

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
<body >
<p style="text-align: center; font-size: 60px;">Welcome <span style="color: green; font-size: 60px; text-align: center;"><?php echo $result['userName']; ?> </span>to Online Diagnostic Lab!</p>
		<div class="headerP" style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px   ">
	<h2>My Profile</h2>
</div>


<form method="post" action="myinfo.php" class="infoP" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">

<div class="contentP" style="font-weight: bold;">

    <label>Username: <?php echo $result['userName']; ?></label>
    <br>
    <br>
	<label>Name: <?php echo $Name; ?></label>
	<br>
	<br>
	<label>Email: <?php echo $Email; ?></label>
	<br>
	<br>
	<label>Address: <?php echo $Address; ?></label>
	<br>
	<br>
	<label>Contact No.: <?php echo $ContactNumber; ?></label>
	<br>
	<br>
	<div class="input-group">
		<a href="edit.php"><button type="button" class="btn" style=" cursor:pointer; border-radius: 5px;margin-left: 80%; width: 125px; border:none;padding: 10px 20px 10px 20px">Edit Profile</button></a>
	</div>

    

</div>
    
	

	<div class="input-group">
		<a href="t.php"><button type="button" name="SearchT" class="btn" style=" cursor:pointer; border-radius: 5px;margin-left: 80%; border:none;padding: 10px 20px 10px 20px">MyTreatment History</button></a>	
    </div>
	
    <div class="input-group">
		<a href="Sf.php"><button type="button" name="feedback" class="btn" style="cursor:pointer; border-radius: 5px;margin-left: 80%; border:none;padding: 10px 30px 10px 30px">Send Feedback</button></a>
	</div> 

  
</form>



</body>
</html>
