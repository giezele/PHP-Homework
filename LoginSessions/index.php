<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/normalize.css>"/>
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <title>LOG</title>
</head>
<body>
    

<?php  session_start();   // session starts with the help of this function 


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "Giedre" && $pass == "1234")  // username is  set to "giedre"  and Password   
         {                                   // is 1234 by default     

          $_SESSION['use']=$user;


         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';            //  On Successful Login redirects to home.php

        }

        else
        {
            echo "invalid UserName or Password";
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>
<h1>Enter Username and Password</h1>
<form action="" method="post">
<div class="log_input">
    <input type="text" name="user" placeholder="user = Giedre" required autofocus></br>
    <input type="password" name="pass" placeholder="password = 1234" required>
    <button class = "btn_login" type="submit" name="login">Login</button>
</div>
  

</form>
<h3><a href="../index.php">Back to MAIN page</a></h3>
</body>
</html>