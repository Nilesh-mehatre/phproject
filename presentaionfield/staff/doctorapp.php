<?php include ('../../datafield/bookserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Panel</title>
	<link rel="stylesheet"  href="style3.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Diagnostic<span>Lab</span></h1>
		<nav>
		


		
		<ul> 
		    <li><a href="index2.php">My Info</a></li>
		    <li><a href="book.php">Add Appointment</a></li>
			<li><a href="doctorapp.php">Appointments</a></li>
			<li><a href="cancel.php">Cancel Appointment</a></li>
			<li><a href="searchpatient.php">Search Patient</a></li>
			<li><a href="addD.php">Add Description</a></li>
			<li><a href="../../index.php">Logout</a></li>


		</ul>
		



	</nav>




</header>

<body>
	<h1 class="my1"><span class="mys">Appointments</span></h1>

	<table class="table2">
		<tr>
		<th>Appointment ID</th>
		<th>PatientName</th>
		<th>Tests</th>
		<th>DATE & TIME</th>
		<th>PatientAddress</th>
		<th>PatientEmail</th>
		<th>PatientContactNumber</th>

		

		</tr>
		<?php $sqldoc="SELECT  * FROM bookAppointment ";
		$resultdoc=$mysqli->query($sqldoc);
		if(mysqli_num_rows($resultdoc)>= 1){
			while ($rowdoc=$resultdoc->fetch_assoc()) {

				echo "<tr><td>".$rowdoc["AppoID"]."</td><td>".$rowdoc["Pname"]."</td><td>".$rowdoc["Test"]."</td><td>".$rowdoc["Date"]."</td><td>".$rowdoc['Address']."</td><td>".$rowdoc['Email']."</td><td>".$rowdoc["ContactNo"]."</td><td>";
			}


			echo "</table";
	


		}

		?>
		
	</table>

	<h1 style="margin-left:37% ;margin-top:50px;"   class="asd">Send Confirmation Email </h1>

    <form role="form" method="post" enctype="multipart/form-data" class="form1" style="width: 100%;margin-top:110px;margin-left: -10px;">

    
    <div classs="xa" style="margin-top:0px">
        <label for="email" style="width:40px;">Email</label>
        <input type="email"  id="email" name="email" maxlength="50" style="width:400px;" placeholder="XAXAXA@gmail.com">
        
        <label for="subject" style="margin:10px ;display: inline-block;">Subject</label>
        <input type="text"  id="subject" name="subject" maxlength="50" style="width:400px;" placeholder="Appointment Confirmation">
        
        <label for="name" style="margin:10px ;display:inline-block;" >Message</label>
        <input type="text" placeholder="This is a Confirmation email for your appointment ID:" type="textarea"  id="message" name="message" rows="1" style="width:400px;padding-top: 10px" maxlength="2000">
               
               
        
        <button type="submit"  id="message" name="sendemail" style="width:200px;height:30px;border-radius: 10px; background: #992828 ;margin-left:45%;color: white ">Send
               </button>
               
        
        </div>
        </form>
    
    
    <?php 
    if (isset($_POST['sendmail'])){
        if(mail($_POST['email'], $_POST['subject'], $_POST['message'],'From :shrinathadhav45@gmail.com')){
            echo "success";
        }else{
            echo "failed";
        }
    }
    
    ?>





</body>
</html>

