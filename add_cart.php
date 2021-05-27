<?php 
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    hello world
    <?php
        include("connection.php");
        $sno = $_GET['sno'];
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $no = $_POST['pro'];
            echo $no;
            $sql = "UPDATE `cart` SET `qty` = '$no' WHERE `cart`.`sno` = '$sno'";
            $result = mysqli_query($conn , $sql);
            if($result){
                header("location: add_to_cart.php");
            }
        }
    ?>
</body>
</html>