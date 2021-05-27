<?php

session_start();
session_unset();
session_destroy();
$logout = "login_seller.php";
header("location: $logout");



?>

