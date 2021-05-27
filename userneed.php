<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
      $category = $_POST['cat'];
      $gender = $_POST['gen'];
      $range = $_POST['range'];
      $product = $_POST['product_name'];

      setcookie("userneed_cat" , $category , time()+60*60*24*10);
      setcookie("userneed_gender" , $gender , time()+60*60*24*10);
      setcookie("userneed_price" , $range , time()+60*60*24*10);
      setcookie("userneed_product" , $product , time()+60*60*24*10);
      header("location: index.php");
  }
?>