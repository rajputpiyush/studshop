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
    <!-- add to cart function start here  -->
<?php
include("connection.php");
$sno = $_GET['sno'];
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
    } // while ends here
     $sql = "SELECT * FROM `cart` WHERE username = '$idname' AND sno = '$sno'";
     $results = mysqli_query($conn , $sql);
     $rows23 = mysqli_num_rows($results);
    if($rows23 > 0){
      header("location: add_to_cart.php");
    } // if row23 ends here 
    elseif($rows23 == 0){      
      $sql = "INSERT INTO `cart` (`username` , `sno` ,`qty`) VALUES ('$idname' , '$sno1' , '1')";
      $results = mysqli_query($conn, $sql);
      if($results){
          header("location: add_to_cart.php");
          
      }
      else{
          echo '<script>alert("Oh your product is not added in your cart")</script>';
      }
    }
} // if result ends here
?>
<!-- add to cart function ends here  -->
</body>
</html>