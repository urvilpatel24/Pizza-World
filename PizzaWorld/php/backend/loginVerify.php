<?php

$uname = $_POST["username"];
$pwd = $_POST["password"];

session_start();
$con = mysqli_connect("localhost:3306","root","root");
mysqli_select_db($con,"pizza");
$r = mysqli_query($con,"select id,name from users where email='".$uname."' and password='".$pwd."'");
if($row = mysqli_fetch_array($r)){
    $_SESSION["login"] = true;
    $_SESSION["login_user"] = $row["name"];
    header('Location: ../home.php');
}
else{
    session_start();
    $_SESSION["loginError"] = true;
    header('Location: ../login.php');
}

?>