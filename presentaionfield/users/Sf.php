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

<p style="text-align: center; font-size: 60px;">Hello, <span style="color: green; font-size: 60px; text-align: center;"><?php echo $result['userName']; ?> </span>Send Something to us!</p>


<!-- Feedback Code -->


<form method="post" action="Sf.php" class="infoP" style="margin-left:500px; margin-top: 100px; width: 40%;padding: 20px ;
border:none ;background: white; ">
<?php
if(isset($_GET['loginerror'])){
	$loginerror=$_GET['loginerror'];
}

if(!empty($loginerror)){
	echo '<P class="error">Invalid Login credentials, Please try Again..</p>';
}
 ?>

<div class="input-group">
  <div  class="header" style="width: 78%;height: 25px;margin-top:-50px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px 13px 10px 13px;margin-left:0%  ">
<h2>Feed Back</h2>
</div>

<div class="input-group">
	<input type="text" placeholder="Appointment ID" name="AppoID" style=" padding: 10px; font-size: 20px; margin-left: 60%; height: 40px;width: 500px ; margin-top:0px;margin-left: 0%;border:2px solid #39ca74;border-radius: 10px" >
</div>

<div class="input-group">
	<input type="text" placeholder="Patient Name" name="Pname" style=" padding: 10px; font-size: 20px; margin-left: 60%; height: 40px;width: 500px ; margin-top:0px;margin-left: 0%;border:2px solid #39ca74;border-radius: 10px" >
</div>


<textarea name="feedx" placeholder="Write Something.." style="height:250px;width: 500px ; margin-top:0px;margin-left: 0%;border:2px solid #39ca74;border-radius: 10px" ></textarea>
<button type="submit" name="sendfeedback" class="btn" style=" border-radius: 15px 15px 15px 15px;margin-left: 0%; margin-top: 1px; border:1px solid #80DA9D ;padding: 10px 230px 10px 230px ; text-align: center;" >Send</button>


</div>

</form>


</body>
</html>