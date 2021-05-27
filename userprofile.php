<?php
session_start();
include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <title>Hello, world!</title>
    <style>
    
    body{
    margin-top:20px;
    color: #1a202c;
    text-align: left;
    background-color: #e2e8f0;    
}
.main-body {
    padding: 15px;
}
.card {
    box-shadow: 0 1px 3px 0 rgba(0,0,0,.1), 0 1px 2px 0 rgba(0,0,0,.06);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

.card-body {
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1rem;
}

.gutters-sm {
    margin-right: -8px;
    margin-left: -8px;
}

.gutters-sm>.col, .gutters-sm>[class*=col-] {
    padding-right: 8px;
    padding-left: 8px;
}
.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.bg-gray-300 {
    background-color: #e2e8f0;
}
.h-100 {
    height: 100%!important;
}
.shadow-none {
    box-shadow: none!important;
}














/* order tracking start here  */

.steps .step {
    display: block;
    width: 100%;
    margin-bottom: 35px;
    text-align: center
}

.steps .step .step-icon-wrap {
    display: block;
    position: relative;
    width: 100%;
    height: 80px;
    text-align: center
}

.steps .step .step-icon-wrap::before,
.steps .step .step-icon-wrap::after {
    display: block;
    position: absolute;
    top: 50%;
    width: 50%;
    height: 3px;
    margin-top: -1px;
    background-color: #e1e7ec;
    content: '';
    z-index: 1
}

.steps .step .step-icon-wrap::before {
    left: 0
}

.steps .step .step-icon-wrap::after {
    right: 0
}

.steps .step .step-icon {
    display: inline-block;
    position: relative;
    width: 80px;
    height: 80px;
    border: 1px solid #e1e7ec;
    border-radius: 50%;
    background-color: #f5f5f5;
    color: #374250;
    font-size: 38px;
    line-height: 81px;
    z-index: 5
}

.steps .step .step-title {
    margin-top: 16px;
    margin-bottom: 0;
    color: #606975;
    font-size: 14px;
    font-weight: 500
}

.steps .step:first-child .step-icon-wrap::before {
    display: none
}

.steps .step:last-child .step-icon-wrap::after {
    display: none
}

.steps .step.completed .step-icon-wrap::before,
.steps .step.completed .step-icon-wrap::after {
    background-color: #0da9ef
}

.steps .step.completed .step-icon {
    border-color: #0da9ef;
    background-color: #0da9ef;
    color: #fff
}

@media (max-width: 576px) {
    .flex-sm-nowrap .step .step-icon-wrap::before,
    .flex-sm-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 768px) {
    .flex-md-nowrap .step .step-icon-wrap::before,
    .flex-md-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 991px) {
    .flex-lg-nowrap .step .step-icon-wrap::before,
    .flex-lg-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

@media (max-width: 1200px) {
    .flex-xl-nowrap .step .step-icon-wrap::before,
    .flex-xl-nowrap .step .step-icon-wrap::after {
        display: none
    }
}

.bg-faded, .bg-secondary {
    background-color: #f5f5f5 !important;
}
/* order tracking ends here  */
            
/* login start here  */
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
    </style>
  </head>
  <body>


  
  
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
          <a class="nav-link" href="#">Welcome - ';?><?php echo $_SESSION['name']; ?><?php echo '</a>
          </li>';
        }?>
          <li class="nav-item active">
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
          </li>
 
          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
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
        <form class="form-inline my-2 my-lg-0" method = "GET" action="searching.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name = "search1">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name= "search1">Search</button> -->
      <input type="button"  class="btn btn-outline-success my-2 my-sm-0" value="Submit">
    </form>
        
      </div>
</nav>
</div>
</header>
<!-- header ends here  -->

  <?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
  $idname = $_POST['idsearch'];

}
?>

<div class="container padding-bottom-3x mb-1" style="margin-top: 100px;">
    <div class="card mb-3">
      <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Serch Your order status below </sapn>
     </div>
      </div>
      </div>

  <div class="container">
    <div class="main-body">
  

          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/userlogo2.jpg" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <?php
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                          echo 
                         ' <h4>'.$_SESSION['name'].'</h4>';
                        }
                        else{
                          echo '<h4>Usser</h4>';
                        }
                      ?>

                      <p class="text-muted font-size-sm">
                      <?php
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                          echo 
                         $_SESSION['address'];
                        }
                        else{
                          echo '<h4>Usser</h4>';
                        }
                      ?>
                      </p>

                    </div>
                  </div>
                </div>
              </div>
           
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                          echo 
                         $_SESSION['name'];
                        }
                        else{
                          echo 'User';
                        }
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                          echo 
                         $_SESSION['username'];
                        }
                        else{
                          echo 'User Id';
                        }
                      ?>
                    </div>
                  </div>
                  <hr>
                 
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Mobile</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (320) 380-4539
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php
                        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
                          echo 
                         $_SESSION['address'];
                        }
                        else{
                          echo 'User Address';
                        }
                      ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Track Order</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <form class="form-inline my-2 my-lg-0" method="post" action="userprofile.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Enter Order ID " name="idsearch" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
                    </div>
                  </div>
              

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>




<?php
if(isset($idname)){
  $name = $_SESSION['username'];
  $sql = "SELECT * FROM  orders WHERE  pid = '$idname' && email= '$name'";
  $result = mysqli_query($conn, $sql);
  $No = mysqli_num_rows($result);
  if($No >0){
  if($rows = mysqli_fetch_assoc($result)){
    $ids = $rows['pid'];

    echo'<div class="container padding-bottom-3x mb-1" id="div123456">
    <div class="card mb-3">
      <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Tracking Order No - </span><span class="text-medium">'.$ids.'</span>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="functo1();">
      <span aria-hidden="true" style="color: white;">&times;</span>
    </button></div>
      <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
        <div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped Via:</span> Studshops</div>
        <div class="w-100 text-center py-1 px-2"><span class="text-medium">Status:</span> Checking Quality</div>
        <div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected Date:</span> SEP 09, 2017</div>
      </div>
      <div class="card-body">
        <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
          <div class="step completed">
            <div class="step-icon-wrap">
              <div class="step-icon"><i class="pe-7s-cart"></i></div>
            </div>
            <h4 class="step-title">Confirmed Order</h4>
          </div>
          <div class="step">
            <div class="step-icon-wrap">
              <div class="step-icon"><i class="pe-7s-config"></i></div>
            </div>
            <h4 class="step-title">Processing Order</h4>
          </div>
          <div class="step">
            <div class="step-icon-wrap">
              <div class="step-icon"><i class="pe-7s-medal"></i></div>
            </div>
            <h4 class="step-title">Quality Check</h4>
          </div>
          <div class="step">
            <div class="step-icon-wrap">
              <div class="step-icon"><i class="pe-7s-car"></i></div>
            </div>
            <h4 class="step-title">Product Dispatched</h4>
          </div>
          <div class="step">
            <div class="step-icon-wrap">
              <div class="step-icon"><i class="pe-7s-home"></i></div>
            </div>
            <h4 class="step-title">Product Delivered</h4>
          </div>
        </div>
        <div class="d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-sm-between align-items-center">
       
          <div class="text-left text-sm-right"><a class="btn btn-outline-primary btn-rounded btn-sm" href="orderDetails" data-toggle="modal" data-target="#orderDetails">View Order Details</a></div>
        </div>
        </div>
        </div>
        </div>';

  }
}
  else {

    echo '<script>alert("No order find regarding your order id")</script>';
  }
}
?>

<div class="container padding-bottom-3x mb-1" id="div1321" style="cursor: pointer">
    <div class="card mb-3">
      <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span onclick="functions123();">Click Here For See Your all order details</sapn>
     
    </div>
      </div>
      </div>
      <div class="container padding-bottom-3x mb-1" id="divnow" style="display: none;">
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
$username = $_SESSION['username'];

$sql = "SELECT * FROM  orders WHERE  email = '$username'";
$result12 = mysqli_query($conn, $sql);
$naos = mysqli_num_rows($result12);
if($naos > 0){
while($row123 = mysqli_fetch_assoc($result12)){
  $id1 = $row123['pid'];

  echo'
  <div class="card mb-3">
    <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span class="text-uppercase">Tracking Order No - </span><span class="text-medium">'.$id1.'</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="functo11();">
    <span aria-hidden="true" style="color: white;">&times;</span>
  </button>
    </div>
    <div class="d-flex flex-wrap flex-sm-nowrap justify-content-between py-3 px-2 bg-secondary">
      <div class="w-100 text-center py-1 px-2"><span class="text-medium">Shipped Via:</span> Studshops</div>
      <div class="w-100 text-center py-1 px-2"><span class="text-medium">Status:</span> Checking Quality</div>
      <div class="w-100 text-center py-1 px-2"><span class="text-medium">Expected Date:</span> SEP 09, 2017</div>
    </div>
    <div class="card-body">
      <div class="steps d-flex flex-wrap flex-sm-nowrap justify-content-between padding-top-2x padding-bottom-1x">
        <div class="step completed">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-cart"></i></div>
          </div>
          <h4 class="step-title">Confirmed Order</h4>
        </div>
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-config"></i></div>
          </div>
          <h4 class="step-title">Processing Order</h4>
        </div>
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-medal"></i></div>
          </div>
          <h4 class="step-title">Quality Check</h4>
        </div>
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-car"></i></div>
          </div>
          <h4 class="step-title">Product Dispatched</h4>
        </div>
        <div class="step">
          <div class="step-icon-wrap">
            <div class="step-icon"><i class="pe-7s-home"></i></div>
          </div>
          <h4 class="step-title">Product Delivered</h4>
        </div>
      </div>
      <div class="d-flex flex-wrap flex-md-nowrap justify-content-center justify-content-sm-between align-items-center">
     
        <div class="text-left text-sm-right"><a class="btn btn-outline-primary btn-rounded btn-sm" href="orderDetails" data-toggle="modal" data-target="#orderDetails">View Order Details</a></div>
      </div>
    </div>
    </div>';
}?>
  </div>
  <?php
}
else {
  echo '<script>alert("No order you have been placed yet")</script>'; 

}
}



?>



  <!-- footer starts here  -->
  <hr>
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




<!-- login button start here  -->
<?php
 if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  //  echo $_SESSION['username'];
 echo '<a href="userlogout.php" style="color: white;"><button class="open-button" id="btn123"';?>onclick="return confirm('Are you sure you want to logout?');"
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
function functo(){
  document.getElementById('div132').style.display = "none";

}
function functo1(){
  document.getElementById('div123456').style.display = "none";

}
function functions123(){
  document.getElementById('divnow').style.display = "block";

}
function functo11(){
  document.getElementById('divnow').style.display = "none";

}

</script>
<!-- login  button ends here  -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>