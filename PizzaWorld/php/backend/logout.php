<?php
session_start();
$_SESSION["login"] = false;
unset($_SESSION["login"]);
unset($_SESSION["login_user"]);
session_destroy();
header('Location: ../login.php');
?>