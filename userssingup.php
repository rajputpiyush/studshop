<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
  $username1 = $_POST['email'];
  $activationcode1 =  md5($username1.time());
  $names12 =$_POST['name'];
  $to = $username1;
  $subject = "From Studshops.com: Email Verification";
  
  //  $message = "<b>This is HTML message.</b>";
  //  $message .= "<h1>This is headline.</h1>";
  
  
  
  $message = "
  <h3>Hi - " .$names12."</h3>
  <h4>Your Email ID :" .$username1."</h4>
  <br>
  <h5 align='justify'>This is a email verification message from studshops Below you have see a link after click on link you are successfully 
registered in studshops If you are not try to sign up in studshops then do not click on link. Thank You From studshops</h5>
<a href='https://studshop.000webhostapp.com/checkusersign.php?code=$activationcode1' style='margin: 10px auto;'>Click Here</a>";

$header = "From:studshop.000webhostapp.com \r\n";
//  $header .= "Cc:afgh@somedomain.com \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail ($to,$subject,$message,$header);

if( $retval == true ) {
  echo "<script>alert('Check your email and click on link in email for verification.')</script>";
}else {
  echo "<script>alert('Error. Please try again later.')</script>";
}
}




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
  </head>
  <style>
  
  * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password], input[type=email]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: 1px solid black;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  /* margin: 8px 0; */
  border: none;
  cursor: pointer;
  /* max-width: 200%; */
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
    width: 100%;
  }
}
  </style>
<body>

 
  <!-- header start here  -->
  <header>
    <div class="fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <svg width="2.5em" height="2.5em" style="margin-right: 13px; background-color: white; padding: 3px;" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
        <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
      </svg>
      <a class="navbar-brand" href="#">Studshops <small>.com</small></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div></div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sign In <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Free Sample Papers</a>
          </li>
        
        </ul>
        </li>


      </div>
</nav>
</div>
</header>
<br><br>

<!-- header ends here  -->










<?php



$err = false;
$err1 = false;
$succ = false;

include("connection.php");
$status = 0;
if($_SERVER['REQUEST_METHOD'] == "POST"){
  
  $username = $_POST['email'];
  $password = $_POST['psw'];
  $address1 = $_POST['address'];
  $names1 = $_POST['name'];
  $birthday = $_POST['birthday'];
  $hash = password_hash($password , PASSWORD_DEFAULT);
  $activationcode = md5($username.time());
  
  
  $sql = "SELECT * FROM `userlogin` WHERE uname='$username'";
  $result = mysqli_query($conn , $sql);
  $num = mysqli_num_rows($result);
  if($num > 0){
    $err = true;
    
  }
  else{
        $sql = "INSERT INTO `userlogin` (`name1` ,`uname`, `password`, `address`, `code` , `cstatus` , `birthday` , `dt`) VALUES
         ('$names1','$username','$hash', '$address1' , '$activationcode1' , '$status' , '$birthday' , current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if($result){
            $succ = true;

  


        }
        else{
            $err1 = true;
        }
    }

}



if($err){
    
    echo '<div style="margin: 7px auto; margin-bottom: -16px;"><div class="alert alert-warning success-dismissible fade show" role="alert">
    <strong>Error:</strong> Already have a account through this gmail id on Studshop<small>.com</small>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>';
}
elseif($succ){
    echo '<div style="margin: 7px auto; margin-bottom: -16px;"><div class="alert alert-success alert-dismissible fade show" role="success">
    <strong>Success</strong> Ok Confirmation link is send to your gmail account. Please confirm gmail id once for login.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>';
}

elseif($err1){
    die ('<div style="margin: 7px auto; margin-bottom: -16px;"><div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error</strong> We have facing some technical issue. Plz Try again later.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>');
}
?>












<div  style="background-color: #474e5d; " >
<center>
<form action="userssingup.php" method="post" style="border:1px solid #ccc">
  <div class="container" style="border: 2px solid black; background-color: white; margin-top: 50px; margin-bottom: 50px;">
    <h1>Sign Up</h1>
  
    <hr>
      
  <label for="name"><b>Name</b></label>
    <input type="text"  placeholder="Enter Your Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your address here" name="address" required>
    
    <label for="birthday"><b>DOB</b></label>
    <br>
    <input type="date" name="birthday" id="birthday">
    <br>
    <br>
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix" >
      <button type="submit" class="btn-secondary btn-lg btn-block"  style="background-color: green; border: 2px solid black;">Sign Up</button>
      <button type="button" class="btn-secondary btn-lg btn-block"  style="background-color: #f44336; border: 2px solid black;">
      <a href="index.php" style="color: white; text-decoration: none;">Cancel</a></button>
    </div>
  </div>
</form>
</center>
</div>



















  <!-- footer starts here  -->
  <!-- <hr> -->
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