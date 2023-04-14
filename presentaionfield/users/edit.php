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
<body >
    <?php
	$Name =$_SESSION['login_Name'];
    if(isset($_POST['update_profile']))
    {

		
		$userName = $mysqli->real_escape_string($_POST['userName']);	
		$Email = $mysqli->real_escape_string($_POST['Email']);
		$Address = $mysqli->real_escape_string($_POST['Address']);
		$ContactNumber = $mysqli->real_escape_string($_POST['ContactNumber']);

		// mysqli_query($mysqli, "UPDATE user SET userName = '$NuserName', Email = '$NEmail', Address = '$NAddress', ContactNumber = '$NContactNumber' WHERE Name = '$Name' ") or die('query failed');
		// // $userName = $_POST['userName'];
        // // $Email = $_POST['Email'];
        // // $Address = $_POST['Address'];
        // // $ContactNumber = $_POST['ContactNumber'];

		$spm = "SELECT * FROM `user` WHERE userName='$userName'";
		$res = mysqli_query($mysqli, $spm);
		if(mysqli_num_rows($res) > 0){
			$row = mysqli_fetch_assoc($res);
	
			if($olduserName != $userName){
				if($userName==$row['userName']){
					$errors[] = 'Username already exist. Create unique username.';
				}
			}
		}
		$resultS = "UPDATE `user` SET userName='$userName', Email='$Email', Address='$Address', ContactNumber='$ContactNumber' WHERE Name='$Name'";
		// $resultS = mysqli_query($mysqli, "UPDATE `user` SET userName='$userName', Name='$Name', ContactNumber='$ContactNumber' WHERE Email='$Email'");
		$result45 = mysqli_query($mysqli,$resultS);
		if($result45){
			// header('location:../users/edit.php');
			// header("location:index.php?profile_updated=1");
			echo 'Updated Successfully';
		}
		else{
			$errors[] = 'Something went wrong.';
		}
		

    }
	?>

  

<p style="text-align: center; font-size: 60px;">Welcome <span style="color: green; font-size: 60px; text-align: center;"><?php echo $result['userName']; ?> </span>to Online Diagnostic Lab!</p>
		<div class="headerP" style="width: 15%;margin-top: 60px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px;margin-left:-4px   ">
	<h2>My Profile</h2>
</div>


<form method="post" action="edit.php" class="infoP" style="margin-left:-1px; margin-top:0px ;width: 40%;padding: 20px;border :3px solid #39ca74 ;background: white; border-radius: 10px 10px 10px 10px;">

<div class="contentP" style="font-weight: bold;">

<label>Username: <input type="text" name="NuserName" class="input-group" style="padding: 5px; font-size: 20px;" value="<?php echo $result['userName']; ?>"></label>
    <br>
    <br>
	<label>Name: <?php echo $Name; ?></label>
	<br>
	<br>
	<label>Email:  <input type="text" name="NEmail" class="input-group" style="padding: 5px; font-size: 20px;" value="<?php echo $Email; ?>" ></label>
	<br>
	
	<label>Address: <input type="text" name="NAddress" class="input-group" style="padding: 5px; font-size: 20px;" value="<?php echo $Address; ?>" </label>
	<br>
	
	<label>Contact No.: <input type="text" name="NContactNumber" class="input-group" style="padding: 5px; font-size: 20px;" value="<?php echo $ContactNumber; ?>" </label>
	 	   	 	   <br>
	 	   
            <div class="input-group">
		<a href="myinfo.php"><button class="btn" name="update_profile" style=" cursor:pointer; border-radius: 5px;margin-left: 80%; width: 125px; border:none;padding: 10px 20px 10px 20px">Update Profile</button></a>
	</div>
	

    

</div>
  
</form>


<?php  


if (isset($_POST['feedback'])) {
?>
<form method="post" action="index.php" class="infoP" style="margin-left:500px; margin-top:0px ;width: 40%;padding: 20px ;
border:none ;background: white; ">
<div class="input-group">
  <div  class="header" style="width: 78%;height: 25px;margin-top:-450px;color: white;background: #39ca74;text-align: center;border-radius: 10px 10px 5px 5px;border-bottom: none; border :1px solid #39ca74;padding: 10px 13px 10px 13px;margin-left:60%  ">
<h2>Feed Back</h2>
</div>
<textarea name="feedx" placeholder="Write something.." style="height:300px;width: 500px ; margin-top:0px;margin-left: 60%;border:2px solid #39ca74;border-radius: 10px" ></textarea>
<button type="submit" name="sendfeedback" class="btn" style=" border-radius: 15px 15px 15px 15px;margin-left: 60.5%; margin-top: 1px; border:1px solid #80DA9D ;padding: 10px 230px 10px 230px ; text-align: center;" >Send</button>



</div>


<?php  }


?>
</form>

<!-- 
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

		$Pname =$mysqli -> real_escape_string($_POST['AppoID']);

		$sqlP2="SELECT  * FROM  des WHERE AppoID=('$Pname') OR Pname=('$Pname') " ;
		$resultP2=$mysqli->query($sqlP2);
		if(mysqli_num_rows($resultP2)>1){
			while ($rowP2=$resultP2->fetch_assoc()) {

				echo "<tr><td>".$rowP2["AppoID"]."</td><td>".$rowP2["Pname"]."</td><td>".$rowP2["treatment"]."</td><td>".$rowP2['Note']."</td></tr>";
			}


			echo "</table>";
	


		}
	}?>

 </table> -->









 












	






</body>
</html>

