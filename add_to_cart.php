<?php
session_start();
ob_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="autocompletes.css">

    <title>Hello, world!</title>
    <style>


    
@media screen and (max-width: 425px) {
  #btn123{
    width: 120px;
    font-size: 15px;
    padding: 10px 10px;
  }
  #h3now{
      font-size: 17px;
  }
  .b3now{
    font-size: 13px;
    margin-top: -20px;
  }
  #myForm{
    width: 240px;
    /* height: 350px; */
  }
  .nowss{
    /* max-width: 100px; */
    height: 20px;
  }

  #btn12{
    font-size: 13px;
    /* max-width: 60px; */
    height: 35px;
    padding: 10px 0px 10px 0px;
  }
} 
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: 1px solid black;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 210px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}

/* login ends here  */
/* do not touch highly designed button  */

     @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

body {
    background-color: #eeeeee;
    font-family: 'Open Sans', serif;
    font-size: 14px
}

.container-fluid {
    margin-top: 70px;
    
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.40rem
}

.img-sm {
    width: 80px;
    height: 80px
}

.itemside .info {
    padding-left: 15px;
    padding-right: 7px
}

.table-shopping-cart .price-wrap {
    line-height: 1.2
}

.table-shopping-cart .price {
    font-weight: bold;
    margin-right: 5px;
    display: block
}

.text-muted {
    color: #969696 !important
}

a {
    text-decoration: none !important
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 0px
}

.itemside {
    position: relative;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%
}

.dlist-align {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex
}

[class*="dlist-"] {
    margin-bottom: 5px
}

.coupon {
    border-radius: 1px
}

.price {
    font-weight: 600;
    color: #212529
}

.btn.btn-out {
    outline: 1px solid #fff;
    outline-offset: -5px
}

.btn-main {
    border-radius: 2px;
    text-transform: capitalize;
    font-size: 15px;
    padding: 10px 19px;
    cursor: pointer;
    color: #fff;
    width: 100%
}

.btn-light {
    color: #ffffff;
    background-color: #F44336;
    border-color: #f8f9fa;
    font-size: 12px
}

.btn-light:hover {
    color: #ffffff;
    background-color: #F44336;
    border-color: #F44336
}

.btn-apply {
    font-size: 11px
}


@media screen and (max-width: 1026px) {
  
#btn-remove{
  height: 40px;
}
#btn-remove12{
  height: 40px;
}
  #divcard{

    margin: 10px auto;
  }
}
@media screen and (max-width: 365px){
  #btn-remove{

  font-size: 12px;
  height: 35px;
  padding-left: 4px;
  padding-right: 4px;
  }
}
    </style>
  </head>
  <body>

  <?php 
    include("connection.php");
  ?>
  <!-- //  header start here  -->
  <header>
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <svg width="2.5em" height="2.5em" style="margin-right: 13px; background-color: white; padding: 3px;" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
        <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
      </svg>
      <a class="navbar-brand" href="index.php">Studshops <small>.com</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div></div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  
          
          echo '<li class="nav-item">
          <a class="nav-link" href="userprofile.php">Welcome - ';?><?php echo $_SESSION['name']; ?><?php echo '</a>
          </li>';
        }?>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
    
          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<li class="nav-item active dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="userprofile.php">User</a>
              <a class="dropdown-item" href="contactus.php">Contact Us</a>
              <a class="dropdown-item" href="add_to_cart.php">Cart</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Change Password</a>
            </div>
          </li>';
        
      
  
  }?>
          <li class="nav-item">
            <a class="nav-link" href="offers.php">Offers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="freesample.php">Free Sample Papers</a>
          </li>
        
        </ul>
       
    <form autocomplete="off" class="form-inline my-2 my-lg-0" method = "GET" action="searching.php">
        <div class="autocomplete" >
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name = "search1" id="myInput">
      </div>
  
  <input type="submit" class="btn btn-outline-success my-2 my-sm-0"style="margin-left: 5px;">
    </form>
        
      </div>
  </nav>
  </div>
  </header>
  <!-- header ends here  -->




<?php
include("connection.php");
$idname = $_SESSION['username'];
?>


<br><br><br>


<!-- add to cart display function start here  -->
<div class="container-fluid">
	    <div class="row">
	        <aside class="col-lg-9">
	            <div class="card">
	                <div class="table-responsive">
	                    <table class="table table-borderless table-shopping-cart">
	                        <thead class="text-muted">
	                            <tr class="small text-uppercase">
	                                <th scope="col">Product</th>
	                                <th scope="col" width="80">Price</th>
	                                <th scope="col" width="80">Quantity</th>
	                                <th scope="col" class="text-right d-none d-md-block" width="200"></th>
	                            </tr>
	                        </thead>
	                        <tbody>
<?php

$sql = "SELECT  e.title, e.price , e.offer_price , e.cat , e.image , u.sno , u.qty ,  e.quality , u.username FROM `product` AS e INNER JOIN `cart` AS u ON e.sno = u.sno";
$result = mysqli_query($conn , $sql);
$rows12 = mysqli_num_rows($result);
$prices = 0;
$str = "";
$offers = 0;
if($rows12 > 0){  
  $qua = 1;

  // print_r($a);
  $no = 1;
  while($rows = mysqli_fetch_assoc($result)){
    // product item start here 
    $names = $rows['title'];
    $img = base64_encode($rows['image']);
    $price = $rows['price'];
    $offer = $rows['offer_price'];
    $qua = $rows['quality'];
    $qty = $rows['qty'];
    $cat = $rows['cat'];
    $sno = $rows['sno'];
    $offersprice =$offer * $qty;
    $prices12 = $price * $qty;  
    intval($price);
    $prices += $prices12;
    intval($offer);
    $offers += $offersprice;
    $str .= $names . ", ";
$no++;

    echo '
    <tr>
    <td>
    <figure class="itemside align-items-center">
    <div class="aside">
    <img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="bools world" class="img-sm">
    </div>
    <figcaption class="info"> <a href="#" class="title text-dark" data-abc="true">'.ucwords($names).'</a>
    <p class="text-muted small">QUALITY: '.$qua.'<br><a href="cartremove.php?sno='.$sno.'"  style="background-color: rgb(255, 62, 62);"
    class="btn btn-light" data-abc="true" id="btn-remove" ';?> onclick="return confirm('Are you sure you want to remove this item from cart');" <?php echo '>Remove</a> </p>
   
    </figcaption>
    </figure>
    </td>
    <td>
    <div class="price-wrap"> <var class="price">&#8377;'.$offersprice.'</var> <small class="text-muted"> <del>&#8377;'.$prices12.' <del></small> </div>
    </td>
    <td>
      <form action="add_cart.php?sno='.$sno.'" method="POST">
       
        <select id="inputState" class="form-control" name = "pro" style="width: 55px;">
        <option name ="pro" selected>'.$qty.'</option>
        <option name = "pro">1</option>
        <option name = "pro">2</option>
        <option name = "pro">3</option>
        <option name = "pro">4</option>
        <option name = "pro">5</option>
        <option name = "pro">6</option>
      </select>
        <input type="submit" value="Done" style=" margin-top: 4px; ">
        <!-- <button type="submit">ok</button> -->
        </form>
    </td>
    
    ';
    // product item ends here 
    
    
    
  } // while ends here
  

} // if result ends here
else{
  // echo '<script>alert("Some technical issue")</script>';
  echo "<tr><td>No Product Available in cart</td></tr>";
} 
?>

<!-- add to cart display function ends here  -->

	                          
	                      </tbody>
	                    </table>
	                </div>
	            </div>
	        </aside>
<?php
	            

$discount = $prices - $offers;
$charge1 = 50;
$del = 50;
$echarge1 = 40;
$edel = 40;
if($rows12 > 0){
  echo' <div class="card" style="width: 300px; height: 425px;" id="divcard">';
} 
else{

  echo' <div class="card" style="width: 300px; height: 330px;" id="divcard">';
}
echo'<div class="card-body">
<dl class="dlist-align">
<dt>Total price:</dt>
<dd class="text-right ml-3">&#8377;'.$prices.'</dd>
</dl>
<dl class="dlist-align">
<dt>Discount:</dt>
<dd class="text-right text-danger ml-3">&#8377;'.$discount.'</dd>
</dl>
<dl class="dlist-align">
<dt>Delivery Charge:</dt>
<dd class="text-right ml-3">&#8377; 50</dd>
</dl>';
if($offers > 500){
  echo'
  <dl class="dlist-align">
  <dt>Free Delivery:</dt>
  <dd class="text-right text-danger ml-3">&#8377; -'.$charge1.'</dd>
  </dl>
  ';
}
else{
  $charge1 = 0;
}
if($offers > 1200){
                            echo'
                              <dl class="dlist-align">
                              <dt>Offer For You:</dt>
                                  <dd class="text-right text-danger ml-3">&#8377; -'.$echarge1.'</dd>
                                  </dl>
                                  ';
                                }
                                else{
                                  $echarge1 = 0;
                                }
                                
                                $tprices1 = $prices - $discount - $charge1 + $del - $echarge1;
                                echo '<dl class="dlist-align">
                                <dt>Total:</dt>
                                <dd class="text-right text-dark b ml-3"><strong>&#8377;'.$tprices1.'</strong></dd>
                                </dl>
                                
                                ';
                                
                                ?>
					  
					 
					  <form action="pay.php" method="post">
      <input type="hidden" name="product_name" value="<?php echo $str;?>">
      <input type="hidden" name="product_price" value="<?php echo $tprices1;?>">
      <input type="hidden" name="name" value="<?php echo $_SESSION['name'];?>">
      <input type="hidden" name="email" value="<?php echo $_SESSION['username'];?>">
     <?php 
     if($rows12 > 0){
       
       echo'<input type="number"  style="margin-bottom: 10px; margin-top: -40px; background-color: white; width: 252px; height: 40px; border-radius: 5px; border: 1px solid black;" id="btn-remove12"
        name="phone" id="phone" placeholder=" Enter your contact no" required>
       <input type="submit" class="btn btn-out btn-primary btn-square btn-main" id="btn-remove12" data-abc="true" value="Click To Pay : Rs. '.number_format($tprices1).'">
       
       </form>
       <input type="submit" class="btn btn-out btn-success btn-square btn-main mt-2" id="btn-remove12" data-abc="true" value="Cash On Delievery">';
       
       
      }
      ?>
      <a href="index.php" class="btn btn-out btn-secondary btn-square btn-main mt-2" id="btn-remove12" data-abc="true">Continue Shopping</a>
	                </div>
	            </div>
	        </aside>
	    </div>
  </div>







<!-- login button start here  -->
<?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  //  echo $_SESSION['username'];
 echo '<a href="userlogout.php" style="color: white;"><button class="open-button" id="btn123"';
?>
 onclick="return confirm('Are you sure you want to logout?');"
<?php echo'>Logout</button></a>';
 }
else{

echo '<button class="open-button" id="btn123" onclick="openForm()">SignIn</button>
<div class="form-popup" id="myForm" style="border: 2px solid black;">
<form action="index.php" method="post" class="form-container">


<label for="email"><b class="b3now">Email</b></label>
<input type="text" style="border: 2px solid black;" class="nowss" placeholder="Enter Email" name="email1" required>

<label for="psw"><b class="b3now">Password</b></label>
<input type="password" style="border: 2px solid black;" class="nowss" placeholder="Enter Password" name="psw" required>

<button type="submit" class="btn" id="btn12">Login</button>
<button type="button" class="btn cancel" id="btn12" onclick="closeForm()">Close</button>
<center><p><b class="b3now">Doesnt have an account</b></p></center>
<button type="button" class="btn cancel" style=" background-color: white; margin-top: -20px;">
<a style="color: black;" href="userssingup.php"><b class="b3now">SignUp Now</b></a></button>
</form>';
}
?>

</div>

<script>

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
</script>
<!-- login  button ends here  -->
<!-- don't touch it is login full access modal  -->

<!-- login ends here  -->





  <!-- footer starts here  -->
  <hr style=" margin-top: 50px;" id="hr123">
  <div style="border-bottom: 5px solid black;"></div>
  <div id="page-content" style="background-color: #007bff;">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
        <?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  ?>
  <h1 class="font-weight-light mt-4 text-white"><a href="#" style="color: white; text-decoration: none;" 
  onclick="alert('Please logout first to use this option.');">Sell on Studshops</a></h1>
<?php 
}
else{
  echo '
  <h1 class="font-weight-light mt-4 text-white"><a href="seller_signup.php" style="color: white; text-decoration: none; ">Sell on Studshops</a></h1>
  ';
}
?>
          <p class="lead text-white-50">Set up your shop on Studshops and become a seller. Earn income through Studshop. Sign Up Now.</p>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Studshops.com</small>
    </div>
  </footer>

  <!-- footer ends here  -->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
<script src="autocomplete.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>