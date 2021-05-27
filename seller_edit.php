<?php session_start();
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
<?php

include("connection.php");

$sno = $_GET['id'];
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    $idname = $_SESSION['username'];
}
$sql = "SELECT * FROM `product` WHERE sno = '$sno'";
$result = mysqli_query($conn , $sql);

if($result){
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['title'];
        $price = $row['price'];
        $oprice = $row['offer_price'];
        $username = $row['usernames'];
        $cat = $row['cat'];
        $quality = $row['quality'];
        $desc = $row['desc1'];
        $sno1 = $row['sno'];
        $img = base64_encode($row['image']);
        $save = $price - $oprice;
        $sql = "DELETE FROM `product` WHERE usernames = '$idname' AND sno = '$sno'";
        $results = mysqli_query($conn , $sql);
        if($results){
            header("location: seller_working.php");
        }
        else{
          echo "eror";
        }
     
    } // while ends here
  
   
} // if result ends here
else{
  echo "error1";
}
?>

<!-- add to cart function ends here  -->
</body>
</html>