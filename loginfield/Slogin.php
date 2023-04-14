<?php include('../datafield/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Panel</title>
	<link rel="stylesheet" type="text/css" href="Slogin.css">
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Staff Login</h2>
</div>

<form method="post" action="Slogin.php" class="Dform">

<?php
if(isset($_GET['loginerror'])){
	$loginerror=$_GET['loginerror'];
}

if(!empty($loginerror)){
	echo '<P class="error">Invalid Login credentials, Please try Again..</p>';
}
 ?>


	<?php include ('../datafield/errors.php')?>

	<div class="input-groupD">
		<label>ID or Email</label>
		<input type="text" value="<?php if(!empty($loginerror)){ echo $loginerror;} ?>" name="staffEmail">

	</div>




	<div class="input-groupD">
		<label>Password</label>
		<input type="Password" name="Mpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Login</button>
	</div>

	
	




</form>

</body>
</html>