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
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>

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

/* full login design ends here do not touch it  */

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
#div123{
  margin: 1px;
}

@media screen and (max-width: 1495px){
  #butt1{
        font-size: 12px;
        padding: 5px;
        font-weight: bolder;
        padding-left: 15px;
        padding-right: 15px;
        margin-left: 2px;
        margin-top: 0px;

    }
}

    @media screen and (max-width: 1495px) {
      #slider_img{
  max-width: 100%;
  max-height: 160px;
  margin-top: 55px;
} 

li #additem{
  margin-left: 1800px;
  font-size: 4px;
}
#btn123{
    width: 120px;
    font-size: 15px;
    padding: 10px 10px;
  }
      
      #div123{
        width: 118px;
        height: 215px;

      
    }
 
    div #img112{
        height: 80px;
        max-width: 113.5px;
        padding-left: 0.7px;
    }
    div #div109{
        max-height: 110px;
        max-width: 98%;
    }

    }
#slider_img{
      margin-top: 50px;
}
   


@media screen and (max-width: 427px){

#butt1{
        font-size: 12px;
        padding: 5px;
        font-weight: bolder;
        padding-left: 22px;
        padding-right: 22px;
        margin-left: 2px;
        margin-top: 10px;
    }
    #btnsearch{
      /* background-color: green; */
      font-size: 15px;
      padding: 10px;
      height: 50px;
    }
    #div123{
        width: 118px;
        height: 215px;
        margin: 5px 4px;
    }
    h3 #del123{
  font-size: 12px;
}
 
}


@media screen and (max-width: 370px){
  
  #slider_img{
max-width: 100%;
margin-top: 55px;
max-height: 140px;
} 
  #div123{
    width: 108px;
    height: 205px;
    height: 205px;
    margin: 1px;

    
  }
  div #img112{
    height: 80px;
    max-width: 103px;
    padding-left: 0.7px;
}
div #div109{
    max-height: 100px;
    max-width: 98%;
}
h3 #del123{
  font-size: 11px;
}
}
#div123{
border: 2px solid black;
display: inline-block;
border-radius: 5px;
padding-right: 0px;


}

  </style>
  <body>

<!-- login start here  -->
<?php


   
$error = false;
// include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email1 = $_POST['email1'];
  $password = $_POST['psw'];
$sql = "SELECT * FROM `userlogin` WHERE uname='$email1'";
$result = mysqli_query($conn , $sql);
$row = mysqli_num_rows($result);
// echo "www";
if($row == 1){
  $sql = "SELECT * FROM `userlogin` WHERE cstatus='1' AND uname='$email1'";
  $result12 = mysqli_query($conn, $sql);
  $roess = mysqli_num_rows($result12);
  if($roess == 1){
while($num = mysqli_fetch_assoc($result)){
  $add = $num['address'];
  $name = $num['name1'];

    if(password_verify($password , $num['password'])){
      // session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = "$email1";
      $_SESSION['address'] = "$add";
      $_SESSION['name'] = "$name";
      // header("location: product.php?sno=$sno");
    }
    else{
      
      echo '<script>alert("Incorrect Password")</script>'; 
    }
  }// while ends here 
} // $result12 ends here 
        else{
          echo '<script>alert("Please verify your gmail first for login. Email verification link is send to your registered gmail id");</script>';
        }
} // if row ends here
else{

echo '<script>alert("Username incorrect. Please enter a valid username.")</script>'; 

}
} // if server ends here



?>
<!-- login ends here  -->



<!-- second carts start here  -->
<fieldset style="margin-top: 80px;">
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
    echo '<legend>	&nbsp;	<b>School Books for you  - '.$_SESSION['name'].' </b></legend>';
}
else{
    echo '<legend>	&nbsp;	<b>School Books For You </b></legend>';
}
?>
  <div id="div0987" style="background-color: rgb(236, 255, 231); padding: 5px; border: 1px solid black; margin: 5px;">

<?php
  include("connection.php");
 
  // $new = strtolower($id);
  $sql = "SELECT * FROM `product` WHERE cat= 'Class Book'";
  // $sql = "SELECT * FROM `product` WHERE title LIKE '%$id%' ORDER BY offer_price";

$result = mysqli_query($conn , $sql);
$row = mysqli_num_rows($result);

while($row = mysqli_fetch_assoc($result)){
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
      <div id="div123" style="background-color: white">
      <div><a href="product.php?sno='.$snos.'" target="blank"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" style="width: 15rem;" height="150rem"; id="img112"></a></div>
      <h3 class="tril" id="tril09" style="font-size: 15px;"> '.ucwords(substr("$name",0,23)).'... </h3>
          
    <h3 class="tril" id="h3tri" style="margin-top: 5px;">&#8377;' .$offer_price.'<del id="del123">&#8377;' .$price. '</del></h3>
      <h4 class="tril" id="tirl" style="font-size: 14px; margin-top: -8px;">Save &#8377;' .$save. '</h4>
      <div style="padding: 8px;" id="style121">
      <a href="product.php?sno='.$snos.'" target="blank"><button id="butt1">Buy Now</button></a>
      </div>
      </div>
      ';
  
}
?>
</div>


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
<form action="school.php" method="post" class="form-container">


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


<!-- header start here  -->
<header>
    <div class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <svg width="2.5em" height="2.5em" style="margin-right: 13px; background-color: white; padding: 3px;" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
      <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
    </svg>
  <a class="navbar-brand" href="#">Studshop <small>.com</small></a>
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
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profile
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">User</a>
              <a class="dropdown-item" href="contactus.php">Contact Us</a>
              <a class="dropdown-item" href="add_to_cart.php">Cart</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Change Password</a>
            </div>
          </li>';
          

}?>     <li class="nav-item">
<a class="nav-link" href="offers.php">Offers</a>
</li>
       <li class="nav-item active">
            <a class="nav-link" href="offers.php">Schools <span class="sr-only">(current)</span></a>
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
<br><br><br>
<!-- header ends here  -->




  <!-- footer starts here  -->
  <hr>
  <div style="border-bottom: 5px solid black;"></div>
  <div id="page-content" style="background-color: #007bff;">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
        <h1 class="font-weight-light mt-4 text-white"><a href="seller_signup.php" style="color: white; text-decoration: none; ">Sell on Studshops</a></h1>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>