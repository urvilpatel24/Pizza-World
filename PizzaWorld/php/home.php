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
    <!--<link rel="stylesheet" href="../css/home.css">-->
    <script src="../css/default/fa/js/bootstrap.min.js"></script>
    <script src="../js/homeJS.js" type="text/javascript" ></script>
    <style>
    body {
        text-align: center;
        width: 100%;
        height: 100%;
        background-image: url(../img/back4.jpg);
        background-repeat: no-repeat;
        font-family: 'Century Gothic';
        color: rgb(240, 238, 238);
        font-size: 19px;
        background-position: center;
        background-size: cover;
        text-align: center;
        overflow: auto;
    }

    .rotate {
        transform-origin: 50% 50%;
        animation: 15s rotateRight infinite linear;
    }

    @keyframes rotateRight {
        100% {
            transform: rotate(360deg);
        }
    }

    img {
        position: absolute;
        width: 10cm;
    }

    #err {
        width: 99.5%;
        color: black;
        margin: auto;
        background-color: rgba(245, 125, 136, 0.7);
        border-color: black;
    }

    #err2 {
        width: 99.5%;
        color: black;
        margin: auto;
        background-color: rgba(125, 245, 125, 0.7);
        border-color: black;
    }

    #left {
        float: left;
        padding: 25px;
        padding-top: 10px;
        text-align: left;
    }

    #left input[type="checkbox"] {
        margin-bottom: 13px;
        size: 25px;
    }

    #img img {
        width: 13cm;
        left: 149px;
        top: 32px;
    }
    #dish{
      width: 20cm;
    }
    #center {
        float: left;
        height: auto;
    }

    #hii {
        position: relative;
        font-size: 100px;
        top: 120px;
        left: 300px;
    }

    #right {
        float: right;
        padding: 25px;
        padding-top: 10px;
        margin: auto;
    }

    #h1 {
        padding-bottom: 5px;
        font-size: 35px;
        font-weight: bold;
    }

    select {
        padding: 3px;
        font-size: 20px;
    }

    table {
        margin: 25px;
        margin-top: 0px;
        text-align: right;
        width: 350px;
    }

    table,
    tr,
    td {
        border: 1px solid whitesmoke;
    }

    td {
        padding: 5px;
    }

    #add,
    #log,
    #pay {
        width: 300px;
        margin: auto;
    }


        /* Custom, iPhone Retina */
        @media only screen and (min-width : 318px) {
            body{
              background-position: center;
              background-size: cover;
              background-repeat: no-repeat;
              text-align: center;
            }
            #h1{
              margin: auto;
              font-size:34px;
            }
            select{
              font-size:15px;
            }

            #left{
              float: none;
              margin: auto;
              text-align: center;
            }
            #left #chk{
              text-align: left;
              margin: auto;
              width: 177px;
              padding-top: 10px;
            }
            #center{
              float: none;
              margin: auto;
              text-align: center;
              margin-top: 35px;
            }
            #img img {
                width: 63%;
                margin: auto;
                top: 10%;
                left: 20.5%;
            }
            #dish{
              width: 100%;
              margin: auto;
              left:0px;
            }
            #hii{
              font-size: 60px;
              left: 0px;
              padding: 0px;
              top:35px;
              margin: auto;
            }
            #right{
              float: none;
              margin: auto;
              text-align: center;
              padding:0px;
              margin-bottom: 100px;
              margin-top: 260px;
            }
            #add,#pay,#log{
              width: 240px;
            }
            table,tr,td{
              margin: auto;
              padding: 0px;
              float: none;
              width:80%;
              margin-top: 25px;
              margin-bottom: 100px;
              padding: 3px;
            }
            td{
              padding: 5px;
            }
        }

        /* Extra Small Devices, Phones */
        @media only screen and (min-width : 420px) {
          #h1{
            font-size: 41px;
          }
          select{
            font-size: 18px;
          }
          #left #chk{
            width: 194px;
            font-size: 21px;
          }
          #center{
            margin-top: 35px;
          }
          #img img {
              margin: auto;
              width: 60%;
              top: 19%;
              left: 22%;
          }
          #dish{
            width: 100%;
            margin: auto;
            left:0px;
          }
          #hii{
            font-size: 60px;
            top:55px;
            left: 0px;
          }
          #right{
            margin-bottom: 100px;
            margin-top: 420px;
          }
          #add,#pay,#log{
            width: 340px;
            height:55px;
          }
          table,tr,td{
            width: 70%;
          }
        }

        /* Small Devices, Tablets */
        @media only screen and (min-width : 594px) {
          #dishDIV{
            position: absolute;
            width: 78%;
            margin-left: 10%;
            margin-right: 10%;
          }
          #img img {
              width: 48%;
              top: 16%;
              left: 27%;
          }
          #h1{
            font-size: 44px;
          }
          select{
            font-size: 20px;
          }
          #left #chk{
            width: 225px;
            font-size: 24px;
          }
          #hii{
            font-size: 70px;
            top:85px;
            left: 0px;
          }
          #right{
            margin-bottom: 100px;
            margin-top: 380px;
          }
          #add,#pay,#log{
            width: 370px;
            height:55px;
          }
          table,tr,td{
            width: 60%;
          }
        }

        @media only screen and (min-width : 739px) {
          #dishDIV{
            position: absolute;
            width: 78%;
            margin-left: 10%;
            margin-right: 10%;
          }
          #img img{
              width: 46%;
              top:44%;
              left:28%;
          }
          #h1{
            font-size: 50px;
          }
          select{
            font-size: 22px;
          }
          #left #chk{
            width: 253px;
            font-size: 28px;
          }
          #hii{
            font-size: 80px;
            top: 100px;
            left: 0px;
          }
          #right{
            padding-top: 380px;
          }
          table,tr,td{
            font-size: 23px;
            width:60%;
          }
          td{
            padding: 8px;
          }
        }

        @media only screen and (min-width : 1100px) {
          #h1 {
              font-size: 40px;
          }
          select {
              font-size: 18px;
          }

          #left {
              float: left;
              padding: 25px;
              padding-top: 10px;
              text-align: left;
          }
          #left #chk{
            width:228px;
            font-size: 25px;
            margin: 0px;
          }

          #center {
          /*float: left;*/
          margin: auto;
          }
          #dishDIV{
            position: absolut;
            width: 60%;
            margin-left: 20%;
            margin-right: 20%;
          }
          #dish{
            width: 80%;
            left: 0px;
            top: 0px;
          }
          #hii {
              font-size: 100px;
              top: 0px;
              left: 0px;
          }
          #img img {
              width: 13cm;
              left: 149px;
              top: 32px;
          }


          #right {
              float: right;
              padding-right: 0px;
              padding-top: 10px;
              margin: auto;
              margin: 25px;
          }
          table {
              margin-top: 25px;
              text-align: right;
          }
          td{
            font-size: 18px;
          }
          td:nth-child(1){
            width:225px;
            min-width: 225px;
            max-width: 225px;
          }
          td:nth-child(2){
            width:72px;
            min-width: 72px;
            max-width: 72px;
          }
          #add,#log,#pay {
              width: 280px;
          }
        }
    </style>
</head>
<body>

<?php
/*session_start();
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
}*/
?>

<form method="post" action="backend/addToCart.php" onsubmit="return validate()" >

<div id="left">
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
    <div id="chk" >
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
</div>

<div id="center">
    <div style="position:relative;">
        <div id="dishDIV" ><img src="../img/plate.png" id="dish"></div>
        <div id="hii" >hii<br><?php// echo $user;?></div>
        <div id="img"></div>
    </div>
</div>

<div id="right" >
    <div id="h1">Bill</div>
    <table name="bill" id="bill"></table>
    <input type="submit" value="Add To Cart" class="btn btn-secondary btn-lg btn-block" id="add" ><br>
    <a href='user.php' class="btn btn-success btn-lg btn-block" id="pay">Confirm & Pay</a><br>
    <a href="backend/logout.php" class="btn btn-danger btn-lg btn-block" id="log" >Logout</a>
</div>

<input type="hidden" id="tot" name="tot">
</form>
</body>
</html>
