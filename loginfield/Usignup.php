<?php include('../datafield/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Panel</title>
	<link rel="stylesheet" type="text/css" href="Ulogin.css">
</head>
<body>

	<div class="header">
	<h2>Register</h2>
</div>

<form method="post" action="Usignup.php" enctype="multipart/form-data">

   <?php if(isset($done)){ ?>
	<div class="successmsg"><span style="font-size: 100px;">&#9989;</span><br>
	You have Registered Succesfully. <br> <a href="Ulogin.php" style="color: black;">Login here...</a>
</div>
<?php } else { ?>

	<?php include ('../datafield/errors.php'); ?>

	<div class="input-group">
		<label>User Name</label>
		<input type="text" name="userName" value="<?php if(isset($error)) { echo $userName;}  ?>" required >


	</div>


	<div class="input-group">
		<label>Full Name</label>
		<input type="text" name="Name" value="<?php if(isset($error)) { echo $Name;}  ?>" required >


	</div>

	<div class="input-group">
		<label>Address</label>
		<input type="text" name="Address" value="<?php if(isset($error)) { echo $Address;}  ?>" required>

	</div>

	<div class="input-group">
		<label>Contact Number</label>
		<input type="text" name="ContactNumber" value="<?php if(isset($error)) { echo $ContactNumber;}  ?>" required>


	</div>


	<div class="input-group">
		<label>Email address</label>
		<input type="text" name="Email" value="<?php if(isset($error)) { echo $Email;}  ?>" required>

	</div>

	<div class="input-group">
		<label>Password</label>
		<input type="text" name="password" value="<?php if(isset($error)) { echo $Password;}  ?>" required>

	</div>
   

	<div class="input-group">
		<button type="submit" name="Register" class="btn">Register</button>
	</div>

	<p>
		Already a member? <a href="Ulogin.php">Login </a>
	</p>
	



<?php } ?>
</form>

</body>
</html>