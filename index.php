<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ODL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="container">
        <h1>Welcome To Online Diagnostic Lab</h1>
        <button class="btn" onclick="location.href='loginfield/Alogin.php'"> 
            <i class="fa-solid fa-desktop"></i> 
            <a id="con" href="loginfield/Alogin.php"><br>Admin</a>
        </button> 

        <button class="btn2" onclick="location.href='loginfield/Slogin.php'"> 
            <i class="fa-solid fa-clipboard-user"></i> 
            <a id="con" href="loginfield/Slogin.php"><br>Staff</a>
        </button>
        
       <button class="btn1" onclick="location.href='loginfield/Ulogin.php'">
           <i class="fa-solid fa-user"></i>
           <a id="cont" href="loginfield/Ulogin.php"><br>User</a>
       </button>

    </div>
</body>
</html>