<?php

$order_id = $_REQUEST["o"];
$con = mysqli_connect("localhost:3306","root","root");
mysqli_select_db($con,"pizza");
$r = mysqli_query($con,"delete from myorder where order_id=".$order_id."");
echo "delete from myorder where order_id=".$order_id."";
header('Location: ../user.php');
?>