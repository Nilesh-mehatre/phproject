<?php 
include 'inc\Alogin.php';
include 'inc\bookserver.php';
include 'inc\errors.php';
include 'inc\server.php';
include 'inc\index3.php';
include 'inc\Slogin.php';
include 'inc\Ulogin.php';
include 'inc\Usignup.php';
include 'inc\add.php';
include 'inc\feedback.php';
include 'inc\home.php';
include 'inc\viewappointments.php';
include 'inc\viewstaff.php';
include 'inc\viewusers.php';
include 'inc\addD.php';
include 'inc\book.php';
include 'inc\cancel.php';
include 'inc\doctorapp.php';
include 'inc\index2.php';
include 'inc\searchpatient.php';
include 'inc\edit.php';
include 'inc\index.php';
include 'inc\myinfo.php';
include 'inc\Sf.php';
include 'inc\t.php';
include 'inc\view.php';





?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HITMAN Laboratory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="form.css">
    <script src="https://kit.fontawesome.com/0f8c293ca5.js" crossorigin="anonymous"></script>
</head>

<body>
  
    <div class="container">
        <h1>Welcome To Online Diagnostic Lab</h1>
        <p><b>Admin Panel</b></p>
        <div class="form-box">
            <form action="home.php" method="POST">
                <h3 id="title">Log in</h3>              
        
                <div class="form-input">
                    <span class="icon"><i class="fa fa-envelope"></i></span>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>

                <div class="form-input">
                    <span class="icon"><i class="fa fa-lock"></i></span>
                    <input type="password" id="password" name="password" placeholder="Password" required>
                </div>

                <div class="form-input">
                    <span class="icon"><i class="fa fa-lock"></i></span>
                    <input type="cpassword" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
                </div>
                
                <button type="submit" class="btn">Login</button>

            </form>

        </div>
    </div>

    <script src="index.js"></script>
</body>

</html>