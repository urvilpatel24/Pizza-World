<?php
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobileNo"];
$password = $_POST["pwd"];

session_start();
$con = mysqli_connect("localhost:3306","root","root");
mysqli_select_db($con,"pizza");
$sql = mysqli_query($con,"insert into users(name,email,mobileNo,password) values('".$name."','".$email."','".$mobile."','".$password."')");
if($sql == 1){
    $_SESSION["registerMsg"] = true;
}
else{
    $_SESSION["registerMsg"] = false;
}
header('Location: ../login.php');
?>