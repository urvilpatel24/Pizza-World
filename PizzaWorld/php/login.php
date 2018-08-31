<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../css/default/fa/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.min.js"></script>
    <script src="../js/default/jquery-3.2.1.min.js"></script>
    <script src="../angular/default/angular.js"></script>
    <link rel="stylesheet" href="../css/default/fa/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../css/default/fa/js/bootstrap.min.js"></script>
    <title>Pizza | Login</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION["loginError"])){
    if($_SESSION["loginError"] == true){
        $_SESSION["loginError"] = false;
        unset($_SESSION["loginError"]);
        ?>
        <div class="alert alert-danger alert-dismissible" id="err">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Login Fail</strong>
        </div>
        <?php
    }
}

if(isset($_SESSION["registerMsg"])){
    if($_SESSION["registerMsg"] == true){
        unset($_SESSION["registerMsg"]);
        ?>
        <div class="alert alert-success alert-dismissible" id="err2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>User Registered Successfully !</strong>
        </div>
        <?php
    }
    else if($_SESSION["registerMsg"] == false){
        ?>
        <div class="alert alert-danger alert-dismissible" id="err">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Registration Error !</strong>Please Try Again.
        </div>
        <?php
    }
}

?>

    <div id="heading" >
        <h1>Welcome To<br> Pizza World</h1>
        <h3>Make Your Own Customized Pizza</h3>
    </div>

    <div id="f1" >
        <form action="backend/loginVerify.php" method="post" name="loginForm">
            <input type="email" name="username" placeholder="Email"><br>
            <input type="password" name="password" placeholder="Password"><br>
            <input type="submit" value="Login" class="btn btn-success btn-lg btn-block" id="b1" >
        </form>
    </div>
    <div id="f2" >
        <form action="backend/register.php" method="post" name="regitrationForm">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="text" name="mobileNo" placeholder="Mobile Number"><br>
            <input type="submit" value="Register"  class="btn btn-success btn-lg btn-block" id="b2" >
        </form>
    </div>
</body>

</html>
