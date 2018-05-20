<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pizza | Home</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../css/default/fa/fontawesome-free-5.0.9/svg-with-js/js/fontawesome-all.min.js"></script>
    <script src="../js/default/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="../css/default/fa/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/home.css">
    <script src="../css/default/fa/js/bootstrap.min.js"></script>
    <script src="../js/homeJS.js" type="text/javascript" ></script>
</head>
<body>

<?php
session_start();
$user = $_SESSION["login_user"];
if(isset($_SESSION["login"])){
    if($_SESSION["login"] != true){
        unset($_SESSION["login"]);
        session_destroy();
        header('Location: login.php');
    }
    if(isset($_SESSION["cartError"])){
?>
    <div class="alert alert-success alert-dismissible" id="err2">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Item Added To Cart Successfully !</strong>
    </div>  
<?php
    unset($_SESSION["cartError"]);
    }
}
else{
    header('Location: login.php');
}
?>

<form method="post" action="backend/addToCart.php" onsubmit="return validate()" >

<div id="left" >
    <div id="h1">Pizza Crust</div>
    <select name="crust" id="crust">
    <option value="Cheese Brust" selected>Cheese Brust</option>
    <option value="Wheat Thin Crust" >Wheat Thin Crust</option>
        <option value="Classic Hand Tossted">Classic Hand Tossted</option>
        <option value="Fresh Pan Pizza" >Fresh Pan Pizza</option>
    </select>
    <br><br>
    
    <div id="h1">Pizza Size</div>
    <select name="size" id="size" >
        <option value="Small" selected >Small</option>
        <option value="Medium" >Medium</option>
        <option value="Large" >Large</option>
    </select>
    <br><br>
    
    <div id="h1">Pizza Qty</div>
    <input type="number" name="qty" id="qty" value="1" style="width:50px;"><br><br>

    <div id="h1">Pizza Toppings</div>
    <input type="checkbox" name="topping[]" value="Yellow Bell Paper" id="topp_yellow"> Yellow Bell Paper <br>
    <input type="checkbox" name="topping[]" value="Green Bell Paper" id="topp_capsi"> Green Bell Paper<br>
    <input type="checkbox" name="topping[]" value="Red Bell Paper" id="topp_red"> Red Bell Paper<br>
    <input type="checkbox" name="topping[]" value="Black Olives" id="topp_olives"> Black Olives<br>
    <input type="checkbox" name="topping[]" value="Jalapeno" id="topp_jalapino"> Jalapeno <br>
    <input type="checkbox" name="topping[]" value="Onion" id="topp_onion"> Onion <br>
    <input type="checkbox" name="topping[]" value="Tomato" id="topp_tomato"> Tomato<br>
    <input type="checkbox" name="topping[]" value="Paneer" id="topp_paneer"> Paneer <br>
    <input type="checkbox" name="topping[]" value="Golden Corns" id="topp_corns" > Golden Corns <br>
    <input type="checkbox" name="topping[]" value="Extra Cheese" id="other_extraCheese" > Extra Cheese <br>
</div>

<div id="right" >
    <div id="h1">Bill</div>
    <table name="bill" id="bill"></table>
    <input type="submit" value="Add To Cart" class="btn btn-secondary btn-lg btn-block" id="add" ><br>
    <a href='user.php' class="btn btn-success btn-lg btn-block" id="pay">Confirm & Pay</a><br>
    <a href="backend/logout.php" class="btn btn-danger btn-lg btn-block" id="log" >Logout</a>    
</div>

<div id="center">
    <div style="position:relative;">
        <img src="../img/plate.png" style="width:20cm;">
        <div id="hii" >hii<br><?php echo $user;?></div>
        <span id="img"></span>
    </div>
</div>

<input type="hidden" id="tot" name="tot">    
</form>
</body>
</html>