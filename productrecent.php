<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://npmcdn.com/flickity@2/dist/flickity.css">
  <title>Document</title>
</head>
<style>

/* external css: flickity.css */




.craousels {
  background: black;
}

.craousels-cell {
  width: 70%;
  height: 200px;
  /* flex-box, center image in cell */
  display: -webkit-box;
  display: -webkit-flex;
  display:         flex;
  -webkit-box-pack: center;
  -webkit-justify-content: center;
          justify-content: center;
  -webkit-align-items: center;
          align-items: center;
}

.craousels-cell img {
  display: block;
  max-width: 100%;
  max-height: 100%;
  /* dim unselected */
  opacity: 0.7;
  -webkit-transform: scale(0.85);
          transform: scale(0.85);
  -webkit-filter: blur(5px);
          filter: blur(5px);
  -webkit-transition: opacity 0.3s, -webkit-transform 0.3s, transform 0.3s, -webkit-filter 0.3s, filter 0.3s;
          transition: opacity 0.3s, transform 0.3s, filter 0.3s;
}

/* brighten selected image */
.craousels-cell.is-selected img {
  opacity: 1;
  -webkit-transform: scale(1);
          transform: scale(1);
  -webkit-filter: none;
          filter: none;
}

@media screen and ( min-width: 768px ) {
  .craousels-cell {
    height: 400px;
  }
}

@media screen and ( min-width: 960px ) {
  .craousels-cell {
    width: 60%;
  }
}

/* buttons, no circle */
.flickity-prev-next-button {
  width: 60px;
  height: 60px;
  background: transparent;
  opacity: 0.6;
}
.flickity-prev-next-button:hover {
  background: transparent;
  opacity: 1;
}
/* arrow color */
.flickity-prev-next-button .arrow {
  fill: white;
}
.flickity-prev-next-button.no-svg {
  color: white;
}
/* closer to edge */
.flickity-prev-next-button.previous { left: 0; }
.flickity-prev-next-button.next { right: 0; }
/* hide disabled button */
.flickity-prev-next-button:disabled {
  display: none;
}
</style>
<body>
<center>



<div class="container padding-bottom-3x"  id="div132" style="margin-top: 50px; margin-bottom: -15px;">
    <div class="card mb-3">
      <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span>-- Another Product for you look line this product -- </sapn>
    </div>
      </div>
      </div>

</center>
  <!-- Flickity HTML init -->
  
  <div class="craousels js-flickity">
  <!-- images from unsplash.com -->

<?php
$sno = $_GET['sno'];
$sql = "SELECT * FROM `product` WHERE `sno` = '$sno'";
// $sql = "SELECT * FROM `product` ORDER BY offer_price DESC LIMIT 9";
$results = mysqli_query($conn , $sql);
while ($rows = mysqli_fetch_assoc($results)) {
    
    $cat = $row['cat'];
    $gender = $row['gender'];
    
}

$sql = "SELECT * FROM `product` ORDER BY offer_price LIMIT 6";
$results1 = mysqli_query($conn , $sql);
while($row = mysqli_fetch_assoc($results1)){
  $name = $row['title'];
  $snos = $row['sno'];
  $descr = $row['desc1'];
  $price = $row['price'];
  $offer_price = $row['offer_price'];
  $save = $price - $offer_price;
  $img = base64_encode($row['image']);
  if($offer_price >500){
    $del = "Free Delivery by Studshops over &#8377;500.";
  }
  else{
    $del = "&#8377; 50 rupees charge for home delievery.";
  }


    echo ' 
    <div class="craousels-cell">
    <a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="flight formation" /></a>
  </div>
    ';
 
}
?>



</div>

</body>
<script src="https://npmcdn.com/flickity@2/dist/flickity.pkgd.js"></script>
</html>