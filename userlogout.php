<?php

session_start();
session_unset();
session_destroy();
$logout = "index.php";
header("location: $logout");



?>

