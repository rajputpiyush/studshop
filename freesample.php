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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="autocompletes.css">

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


</style>
  <body>
  <!-- login start here  -->
<?php
include("connection.php");

   
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
      // header("location: index.php");
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
// login ends here 
 ?>   


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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <?php
          if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            echo '<li class="nav-item dropdown">
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
          <li class="nav-item active">
            <a class="nav-link" href="freesample.php">Free Sample Paper <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form autocomplete="off" class="form-inline my-2 my-lg-0" method = "GET" action="searchingfree.php">
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



<div class="container padding-bottom-3x mb-1" id="div1321" style="margin-top: 100px;">
    <div class="card mb-3">
      <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span>
      <?php  if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo "Hi ".$_SESSION['name'];

      }?>
      Free Sample Papers, Notes , Question Papers , etc for you.</span>
    </div>
      </div>
      </div>











    <?php
    echo '<div class="card" style="margin-top: 20px; margin-left: 10px; margin-right: 10px;">
    <div class="card-header">
    Sample Paper - (Basic)
    </div>
    <div class="card-body">
    <h5 class="card-title">Maths 10 Class (2019-2020)</h5>
    <p class="card-text">Maths Sample paper of class 10th. Total 9 page.</p>
    <a href="extra/cbse10math.pdf" class="btn btn-primary">View And Download</a>
    </div>
    </div>';
    echo '<div class="card" style="margin-top: 20px; margin-left: 10px; margin-right: 10px;">
    <div class="card-header">
    Sample Paper - (Standard)
    </div>
    <div class="card-body">
    <h5 class="card-title">Maths 10 Class (2019-2020)</h5>
    <p class="card-text">Maths Sample paper of class 10th. Total 11 pages in paper.</p>
    <a href="extra/cbse10math20192020(standard).pdf" class="btn btn-primary">View And Download</a>
    </div>
    </div>';

?>
  




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
<form action="freesample.php" method="post" class="form-container">


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
<!-- login button ends here  -->




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
     
          <p class="lead text-white-50">Set up your shop on Studshops and become a seller. Earn income through Studshops. Sign Up Now.</p>
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
    <script src="autocompletefree.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>