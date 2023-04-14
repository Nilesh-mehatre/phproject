<?php include('../datafield/server.php');

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
	<link rel="stylesheet" type="text/css" href="Ulogin.css">
</head>
<body>
	<div class="header">
	<h2>User Login</h2>
</div>


<form method="post" action="Ulogin.php">

<?php
if(isset($_GET['loginerror'])){
	$loginerror=$_GET['loginerror'];
}

if(!empty($loginerror)){
	echo '<P class="error">Invalid Login credentials, Please try Again..</p>';
}
 ?>


	<?php include ('../datafield/errors.php')?>

	<div class="input-group">
		<label>Username or Email</label>
		<input type="text" value="<?php if(!empty($loginerror)){ echo $loginerror;} ?>" name="userEmail">
		<!-- <input type="text" name="userName"> -->

	</div>




	<div class="input-group">
		<label>Password</label>
		<input type="Password" name="password">



	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Login</button>
	</div>


	<p>
		Not a member? <a href="Usignup.php">Sign Up </a>
	</p>
	




</form>

</body>
</html>