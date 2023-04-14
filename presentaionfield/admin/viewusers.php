<?php include '../../datafield/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet"  href="style5.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Diagnostic<span>Lab</span></h1>
		<nav>
		


		
		<ul> 
			
		
		    <li><a href="home.php">Home</a></li>
			<li><a href="add.php">Add/Delete Members</a></li>
			<li><a href="viewstaff.php">View Members</a></li>
			<li><a href=" viewusers.php">View Users</a></li>
			<li><a href="viewappointments.php">View Appointments</a></li>
			<li><a href="feedback.php">FeedBack</a></li>


			<li><a href="../../index.php">Logout</a></li>

			


	
			

		</ul>
		



	</nav>




</header>

<body>
	<h1 style="margin-left:35% ;margin-top:80px"   class="asd">Users Information</h1>
	<table class="table5">
		<tr>
		<th>userName</th>
		<th>Name</th>
		<th>Address</th>
		<th>Contact Number</th>
		<th>Email</th>

		</tr>

		<?php $sql3="SELECT  * FROM  user " ;
		$result3=$mysqli->query($sql3);
		if(mysqli_num_rows($result3)>=1){
			while ($row3=$result3->fetch_assoc()) {

				echo "<tr><td>".$row3["userName"]."</td><td>".$row3["Name"]."</td><td>".$row3["Address"]."</td><td>".$row3["ContactNumber"]."</td><td>".$row3['Email']."</td><td>";
			}


			echo "</table";
	


		}

		?>
		
	</table>
</body>
</html>