<?php

session_start();
$crust = $_POST["crust"];
$size = $_POST["size"];
$toppings = $_POST["topping"];
$qty = $_POST["qty"];
$total = $_POST["tot"];
$user = $_SESSION["login_user"];
$tpstr = "";

foreach($toppings as $tp){
    $tpstr .= $tp .", "; 
}

$con = mysqli_connect("localhost:3306","root","root");
mysqli_select_db($con,"pizza");
$r = mysqli_query($con,"insert into myorder(user_id,crust,size,qty,total,topping) values('".$user."','".$crust."','".$size."','".$qty."','".$total."','".$tpstr."')");
if($r != 0){
    $_SESSION["cartError"] = "Data Added To Cart Successfully !!!";
}
else{
    $_SESSION["cartError"] = "Oops! Something Got Wrong, Please Try Again";
}
header('Location: ../home.php');

?>