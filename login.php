<?php

include_once "controllers/userController.php";
include_once "models/user.php";

$errmsg ="";
$usercont=new UserController();

$user =new User();
session_start();
if(isset($_POST['ip'])&&isset($_POST['pass'])){
    $user->setip($_POST['ip']);
    $user->setpass($_POST['pass']);
    $usercont->login($user);
    
    if($usercont->login($user)){
        if(isset($_SESSION["ip"])){
           
          }
            if($_SESSION["ip"]=="888"){
              $ip=$_SESSION["ip"];
              header("Location: index.php?ip=$ip");
              exit();
            }
            
        else{
            $errmsg =$_SESSION["errmsg"];
        }
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styless.css">
</head>
<body>
    <div>
        <img src="images/Login-wallpaper.jpg" alt="logo" class="wallpaper">
    </div>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST" action="login.php">
    <div class="logo">
        <a href="index.html"><img src="mythe-high-resolution-logo-white-transparent.png" alt=""></a>
    </div>
    <label for="username">Username</label>
    <input type="text" placeholder="Email or Phone" id="username" name="ip">

    <label for="password">Password</label>
    <input type="password" placeholder="Password" id="password" name="pass">

    <?php
    if ($errmsg != "") {
        ?>
        <div class="text-decoration-none link-danger" id="alert" role="alert"><?php echo $errmsg ?></div>
        <?php
    }
    ?>

    <input type="submit" value="Login">
    <div class="social">
        <div class="go"><i class="fab fa-google"></i> Google</div>
        <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
    </div>
</form>

</body>
</html>
