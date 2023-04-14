<?php


session_start();
$errors = array();

$mysqli = new mysqli("localhost", "root", "", "shri");

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	exit();
}

//////////   USER REGISTRATION ////////////


if (isset($_POST['Register'])) {





	$userName	= $mysqli->real_escape_string($_POST['userName']);
	$Name 	= $mysqli->real_escape_string($_POST['Name']);
	$Address 	= $mysqli->real_escape_string($_POST['Address']);
	$ContactNumber	 = $mysqli->real_escape_string($_POST['ContactNumber']);
	$Email 		=  $mysqli->real_escape_string($_POST['Email']);
	$Password 	= $mysqli->real_escape_string($_POST['password']);


    extract($_POST);
	if(strlen($userName)<3){
		$errors[]= ' Please Enter your userName';
	}

	if(strlen($userName)>20){
		$errors[]= ' Max length of userName 20 characters not allowed';
	}
	if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $userName))
	{
		$errors[]= 'Invalid userName. Enter lowercase letters without any space and no number at the start.';
	}


	if(strlen($Name)<5){
		$errors[]= ' Please Enter your full Name';
	}

	if(strlen($Name)>30){
		$errors[]= ' Max length of Full name 30 characters not allowed';
	}
	if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $Name))
	{
		$errors[]= 'Invalid Full name. please enter letters without any Digit or Special Symbol';
	}

	if(strlen($ContactNumber)<10){
		$errors[]= ' Contact Number should be 10 Digit.';
	}

	if(strlen($ContactNumber)>10){
		$errors[]= ' Contact Number should be 10 Digit.';
	}
	if(!preg_match("/^[0-9]*$/", $ContactNumber))
	{
		$errors[]= 'Invalid Contatc Number. please enter Digits without any letter or Special Symbol.';
	}

	if(strlen($Email)>40){
		$errors[]= ' Email max length 40 characters not allowed.';
	}

	if(strlen($Password)<8){
		$errors[]= ' The Password must be 8 characters long.';
	}
	if(strlen($Password)>20){
		$errors[]= ' Password max length 20 characters not allowed.';
	}

	$sql4567 = "SELECT * FROM `user` WHERE (userName='$userName' or Email='$Email' or Name='$Name')";
	$result = mysqli_query($mysqli, $sql4567);

	if(mysqli_num_rows($result) > 0){
		$row = mysqli_fetch_assoc($result);

		if($userName==$row['userName']){
			$errors[] = 'Username already exists.';
		}
		if($Email==$row['Email']){
			$errors[] = 'Email already exists.';
		}
		if($Name==$row['Name']){
			$errors[] = 'Email already exists.';
		}
	}








	if (count($errors) == 0) {


		$Password = md5($Password);

		$sql = "INSERT INTO `user` (`userName`, `Name`, `Address`, `ContactNumber`, `Email`, `Password`) VALUES ('$userName','$Name','$Address','$ContactNumber','$Email','$Password')";




		if ($mysqli->query($sql)) {
			// // printf("%d Row inserted.\n", $mysqli->affected_rows);
			// printf("Your Account created Succesfully, you can login Now!\n", $mysqli->affected_rows);
			$done=45;
		}
		else{
			$errors[] = 'Failed : Something went wrong.';
		}


	}
}



//////////  USER LOGIN /////////


if (isset($_POST['Login'])) {

	$userEmail 	= $mysqli->real_escape_string($_POST['userEmail']);
	$Password 	= $mysqli->real_escape_string($_POST['password']);
	if (empty($userEmail)) {
		array_push($errors, "userName is required");
		# code...
	}
	if (empty($Password)) {
		array_push($errors, "Password is required");


		# code...
	}


	if (count($errors) == 0) {

		$Password = md5($Password);



		$query = "SELECT * FROM `user` WHERE userName=('$userEmail') OR Email=('$userEmail') AND Password=('$Password')";
		$result = mysqli_query($mysqli, $query);
		$numRows = mysqli_num_rows($result);
		if ($numRows == 1) {

            $row = mysqli_fetch_assoc($result);
			$_SESSION['login_sess']="1";
			$_SESSION['login_Name']=$row['Name'];
			header('location:../presentaionfield/users/index.php');
          
		} else{
            header("location: Ulogin.php?loginerror=".$userEmail);
        }
	}
}


# code...


if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['userName']);
	header('location:login.php');
}


if (isset($_GET['My info'])) {
	header('location:login.php');
}

$userprofile =isset($_SESSION['Name']);
$query = "SELECT * FROM user WHERE Name=('$userprofile')";
$result = mysqli_query($mysqli, $query);
$col = mysqli_fetch_assoc($result);


////// STAFF LOGIN ///////////


if (isset($_POST['Login2'])) {

	$Mpassword = $mysqli->real_escape_string($_POST['Mpassword']);
	$staffId	= $mysqli->real_escape_string($_POST['staffEmail']);
	if (empty($staffId)) {
		array_push($errors, "ID or Email is required");
		# code...
	}
	if (empty($Mpassword)) {
		array_push($errors, "Password is required");


		# code...
	}


	if (count($errors) == 0) {

		$queryD = "SELECT * FROM `staff` WHERE StaffID=('$staffId') OR email=('$staffId') AND password=('$Mpassword')";
		$resultD = mysqli_query($mysqli, $queryD);
		$shri = mysqli_num_rows($resultD);
		if ($shri == 1) {
	
		    $row = mysqli_fetch_assoc($resultD);
		    $_SESSION['login_ses']="1";
		    $_SESSION['login_email']=$row['email'];
			// $_SESSION['StaffId'] = $staffId;
			// $_SESSION['success'] = "you are now logged in";
			header('location:../presentaionfield/staff/index2.php');
		} else {
			array_push($errors, "The Email/Password not correct");
		}
	}
}



if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
}






	if (isset($_POST['Login3'])) {

		$adminID	= $mysqli->real_escape_string($_POST['adminID']);
		$adminpassword = $mysqli->real_escape_string($_POST['adminpassword']);
		if (empty($adminID)) {
			array_push($errors, "Admin ID is required");
			# code...
		}
		if (empty($adminpassword)) {
			array_push($errors, "Password is required");


			# code...
		}


		if (count($errors) == 0) {





			$queryA = "SELECT * FROM admin WHERE AdminID=('$adminID')AND adminpassword=('$adminpassword')";
			$resultA = mysqli_query($mysqli, $queryA);
			if (mysqli_num_rows($resultA) == 1) {




				$_SESSION['AdminID'] = $adminID;
				$_SESSION['success'] = "you are now logged in";
				header('location:../presentaionfield/admin/home.php');
			} else {
				array_push($errors, "The ID/Password not correct");
			}
		}
	}




// Feedback PHP Code //
 


if (isset($_POST['sendfeedback'])) {
 
$feed1	= $mysqli->real_escape_string($_POST['AppoID']);
$feed2	= $mysqli->real_escape_string($_POST['Pname']);
$feed3	= $mysqli->real_escape_string($_POST['feedx']);

extract($_POST);
if(strlen($feed2)==0){
	$errors[]= ' Please Enter correct Name';
}

if(strlen($feed2)>20){
	$errors[]= ' Max length of Patient Name 20 characters not allowed';
}

if(strlen($feed3)==0){
	$errors[]= 'Please Write something.';
}

$sqlll = "SELECT * FROM `bookappointment` WHERE Pname='$feed2' or AppoID='$feed1' ";
	$resultl = mysqli_query($mysqli, $sqlll);

	if(mysqli_num_rows($resultl)==0){
		$row = mysqli_fetch_assoc($resultl);

		if($feed2==$row['Pname']){
			$errors[] = 'Patient not found.';
		}
		if($feed1==$row['AppoID']){
			$errors[] = 'Patient not found.';
		}



 }
 if (count($errors) == 0) {

	$sqlfeed = "INSERT INTO `PFeedback` (`Pid`, `Pname`, `feedback`) VALUES ('$feed1', '$feed2', '$feed3') ";

	if ($mysqli->query($sqlfeed)) {
		echo  'Feedback Sent Successfully.';
	}
	else{
		$errors[] = 'Failed : Something went wrong.';
	}
}
}









	$mysqli->close();




	?>