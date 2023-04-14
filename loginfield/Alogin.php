<?php include ('C:\xampp1\htdocs\shri\datafield\server.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="Alogin.css">
</head>
<body class="Abody">
	<div class="Aheader">
	<h2>Admin Login</h2>
</div>

<form method="post" action="Alogin.php" class="Aform">

	<?php include ('C:\xampp1\htdocs\shri\datafield\errors.php'); ?>

	<div class="input-groupA">
		<label>Admin ID</label>
		<input type="text" name="adminID">

	</div>




	<div class="input-groupA">
		<label>Password</label>
		<input type="Password" name="adminpassword">



	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA"> Login</button>
	</div>

	
	




</form>

</body>
</html>