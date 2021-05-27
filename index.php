<?php
session_start();
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
    <link rel="stylesheet" href="autocompletes.css">
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@400;600&display=swap" rel="stylesheet">
    <title>Home</title>
  <meta name="google-site-verification" content="iGLZGEoHMsKq5pGQbCIR6TsPMxFK16C6yk06RlwSxD4" />
  </head>
<style>

/* membership style start here  */

* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }

}
@media screen and (max-width: 451px) {

    #gol{
      font-size: 50px;
      /* color: blue; */
  }
}  

@media screen and (max-width: 321px) {

#gol{
    font-size: 50px;
    /* color: blue; */
}
} 

@media screen and (max-width: 281px) {

#gol{
    font-size: 40px;
    /* color: blue; */
}
} 

.glow {
  font-size: 80px;
  color: #fff;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

/* membership style ends here  */

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
/* =========================================================================== */

/* rama styling start here  */

#img123456{

  height: 400px;
}
@media screen and (max-width: 1025px) {


#img123456{

height: 300px;
}
}
@media screen and (max-width: 426px) {


  #img123456{

height: 150px;
}
}
@media screen and (max-width: 359px) {


#img123456{

height: 130px;
}
}
/* rama styling ends here  */
/* ================================================================================== */

/* ================================================================================== */
/* islam sikh and christ start here  */

#img1231{

height: 280px;
}
#moth12{
  height: 571px;
}
@media screen and (max-width: 1025px) {


#img1231{

height: 170px;
}
#moth12{
  height: 350px;
}
}
@media screen and (max-width: 769px) {


#img1231{

height: 150px;
}
#moth12{
  height: 310px;
}
}
@media screen and (max-width: 426px) {


#img1231{

height: 90px;
}
#moth12{
  height: 191px;
}
}
@media screen and (max-width: 359px) {


#img1231{

height: 70px;
}
#moth12{
  height: 153px;
}
}

/* sikh crist and islam ends here  */
/* ================================================================================== */

/* quiz competition start here  */
#img12now{
  height: 310px;
}
@media screen and (max-width: 1025px) {
  #img12now{
  height: 213px;
}
}
@media screen and (max-width: 838px) {
  #img12now{
  height: 177px;
}
}
@media screen and (max-width: 769px) {
  #img12now{
  height: 173px;
}
}
@media screen and (max-width: 635px) {
  #img12now{
  height: 133px;
}
}
@media screen and (max-width: 435px) {
  #img12now{
  height: 96px;
}
}
@media screen and (max-width: 426px) {
  #img12now{
  height: 93px;
}
}
@media screen and (max-width: 376px) {
  #img12now{
  height: 80px;
}
}
@media screen and (max-width: 340px) {
  #img12now{
  height: 70px;
}
}
/* quiz competition ends here  */

/* quiz title design start here  */
#headingquiz{
  
  margin-left: 16.1%;
}
#headingquiz1{
  
  margin-left: 11%;
}
#headingquiz4{
  
  margin-left: 14%;
}
@media screen and (max-width: 1217px) {
  #headingquiz{
  font-size: 22px;
  margin-left: 14%;
}
#headingquiz1{
  font-size: 22px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 22px;
  margin-left: 9%;
}
}
@media screen and (max-width: 866px) {
  #headingquiz{
  font-size: 22px;
  margin-left: 8%;
}
#headingquiz1{
  font-size: 22px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 22px;
  margin-left: 7%;
}
}
@media screen and (max-width: 1025px) {
  #headingquiz{
  font-size: 22px;
  margin-left: 12%;
}
#headingquiz1{
  font-size: 22px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 22px;
  margin-left: 8%;
}
}
@media screen and (max-width: 866px) {
  #headingquiz{
  font-size: 22px;
  margin-left: 8%;
}
#headingquiz1{
  font-size: 22px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 22px;
  margin-left: 7%;
}
}

@media screen and (max-width: 769px) {
  #headingquiz{
  font-size: 20px;
  margin-left: 9%;
}
#headingquiz1{
  font-size: 20px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 20px;
  margin-left: 6%;
}

}
@media screen and (max-width: 662px) {
  #headingquiz{
  font-size: 18px;
  margin-left: 9%;
}
#headingquiz1{
  font-size: 18px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 18px;
  margin-left: 6%;
}

}
@media screen and (max-width: 601px) {
  #headingquiz{
  font-size: 18px;
  margin-left: 5%;
}
#headingquiz1{
  font-size: 18px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 18px;
  margin-left: 2%;
}

}
@media screen and (max-width: 508px) {
  #headingquiz{
  font-size: 18px;
  margin-left: 2%;
}
#headingquiz1{
  font-size: 18px;
  margin-left: 9%;
}
#headingquiz4{
  font-size: 18px;
  margin-left: 1%;
}

}
@media screen and (max-width: 465px) {
  #headingquiz{
  font-size: 16px;
  margin-left: 4%;
}
#headingquiz1{
  font-size: 16px;
  margin-left: 7%;
}
#headingquiz4{
  font-size: 16px;
  margin-left: 1%;
}

}
@media screen and (max-width: 426px) {
  #headingquiz{
  font-size: 16px;
  margin-left: 3%;
}
#headingquiz1{
  font-size: 16px;
  margin-left: 5%;
}
#headingquiz4{
  font-size: 16px;
  margin-left: 1%;
}

}
@media screen and (max-width: 398px) {
  #headingquiz{
  font-size: 15px;
  margin-left: 3%;
}
#headingquiz1{
  font-size: 15px;
  margin-left: 5%;
}
#headingquiz4{
  font-size: 15px;
  margin-left: 1%;
}

}
@media screen and (max-width: 376px) {
  #headingquiz{
  font-size: 14px;
  margin-left: 2%;
}
#headingquiz1{
  font-size: 14px;
  margin-left: 5%;
}
#headingquiz4{
  font-size: 14px;
  margin-left: 1%;
}

}
@media screen and (max-width: 357px) {
  #headingquiz{
  font-size: 13px;
  margin-left: 4%;
}
#headingquiz1{
  font-size: 13px;
  margin-left: 7%;
}
#headingquiz4{
  font-size: 13px;
  margin-left: 1%;
}

}


@media screen and (max-width: 340px) {
  #headingquiz{
  font-size: 12px;
  margin-left: 3%;
}
#headingquiz1{
  font-size: 12px;
  margin-left: 6%;
}
#headingquiz4{
  font-size: 12px;
  margin-left: 1%;
}

}

@media screen and (max-width: 281px) {
  #headingquiz{
  font-size: 11.5px;
  margin-left: 2%;
}
#headingquiz1{
  font-size: 11.5px;
  margin-left: 4%;
}
#headingquiz4{
  font-size: 11.5px;
  margin-left: 0%;
}
}
/* quiz title design ends here  */

/* image slider start here  */
#slider_img{
  height: 28rem;
}
@media screen and (max-width: 1024px) {
  #slider_img{
  height: 23rem;
}
}
@media screen and (max-width: 769px) {
  #slider_img{
  height: 19rem;
}
}
@media screen and (max-width: 426px) {
  #slider_img{
  height: 15rem;
}
}

@media screen and (max-width: 320px) {
  #slider_img{
  height: 10rem;
}
}

/* image slider ends here  */


/* cart design start here  */
#img112{
  width: 15rem;
  height: 13rem;
}
#div123{
  margin-top: 7px;
}
@media screen and (max-width: 1441px) {

#img112{
width: 100%;
height: 12rem;
}
#div123{
width: 16.3%;
}
#butt1{
 font-size: 15px;
  padding-left: 32%;
padding-right: 32%;
}
}

@media screen and (max-width: 1206px) {

#img112{
width: 100%;
height: 12rem;
}
#div123{
width: 16%;
}
#butt1{
 font-size: 15px;
  padding-left: 28%;
padding-right: 28%;
}
}
@media screen and (max-width: 1025px) {

#img112{
width: 100%;
height: 8rem;
}
#div123{
width: 16%;
}
#butt1{
  font-size: 15px;
  padding: 5px;
padding-left: 25%;
padding-right: 25%;
}
}
@media screen and (max-width: 915px) {


#butt1{
  font-size: 15px;
  padding: 5px;
padding-left: 22%;
padding-right: 22%;
}
}
@media screen and (max-width: 837px) {


#butt1{
  font-size: 15px;
  padding: 5px;
padding-left: 20%;
padding-right: 20%;
}
}
@media screen and (max-width: 806px) {

#img112{
width: 100%;
height: 6rem;
}
#div123{
width: 16%;
}
#butt1{
font-size: 10px;
padding: 5px;
padding-left: 28%;
padding-right: 28%;
}
}
@media screen and (max-width: 753px) {
#butt1{
font-size: 10px;
padding: 5px;
padding-left: 26%;
padding-right: 26%;
}
}
@media screen and (max-width: 701px) {
#butt1{
font-size: 10px;
padding: 5px;
padding-left: 25%;
padding-right: 25%;
}
}
@media screen and (max-width: 676px) {
#butt1{
font-size: 10px;
padding: 5px;
padding-left: 24%;
padding-right: 24%;
}
}
@media screen and (max-width: 671px) {

#img112{
width: 100%;
height: 6rem;
}
#div123{
width: 19.3%;
}
#butt1{
  padding: 5px;
padding-left: 22%;
padding-right: 22%;
}
}
@media screen and (max-width: 667px) {
#butt1{
font-size: 10px;
padding: 5px;
padding-left: 28%;
padding-right: 28%;
}
}

@media screen and (max-width: 625px) {

#img112{
width: 100%;
height: 6rem;
}
#div123{
width: 19%;
}
#butt1{
font-size: 13px;
padding: 5px;
padding-left: 22%;
padding-right: 22%;
}
}
@media screen and (max-width: 615px) {
#butt1{
font-size: 10px;
padding: 5px;
padding-left: 23%;
padding-right: 23%;
}
}
@media screen and (max-width: 600px) {

#img112{
width: 100%;
height: 6rem;
}
#div123{
width: 24%;
}
#butt1{
  padding: 5px;
padding-left: 30%;
padding-right: 30%;

}
}

@media screen and (max-width: 543px) {

#butt1{
  padding: 5px;
padding-left: 28%;
padding-right: 28%;

}
}
@media screen and (max-width: 505px) {

#butt1{
  padding: 5px;
padding-left: 26%;
padding-right: 26%;

}
}

@media screen and (max-width: 490px) {


#butt1{
  padding: 5px;
padding-left: 26%;
padding-right: 26%;
}
}
@media screen and (max-width: 470px) {


#butt1{
  padding: 5px;
padding-left: 24%;
padding-right: 24%;
}
}
@media screen and (max-width: 446px) {

  #img112{
width: 100%;
height: 7rem;
}
#div123{
width: 32%;
}
#butt1{
  padding: 5px;
padding-left: 30%;
padding-right: 30%;
}
}
@media screen and (max-width: 426px) {

#img112{
width: 100%;
height: 7rem;
}
#div123{
width: 32%;
}
#butt1{
font-size: 10px;
padding: 10px;
padding: 5px;
padding-left: 28%;
padding-right: 28%;
}
}
@media screen and (max-width: 405px) {


#butt1{
font-size: 10px;
padding: 10px;
padding: 5px;
padding-left: 28%;
padding-right: 28%;
}
}
@media screen and (max-width: 384px) {


#butt1{
font-size: 10px;
padding: 10px;
padding: 5px;
padding-left: 27%;
padding-right: 27%;
}
}
@media screen and (max-width: 375px) {

#img112{
width: 100%;
height: 5rem;
}
#div123{
width: 32%;
}
#butt1{
font-size: 10px;
padding: 5px;
padding-left: 26%;
padding-right: 26%;
}
}
@media screen and (max-width: 340px) {


#butt1{
font-size: 10px;
padding: 5px;
padding-left: 24%;
padding-right: 24%;
}
}


@media screen and (max-width: 320px) {

  #img112{
width: 100%;
height: 5rem;
}
#div123{
  width: 32%;
}
#butt1{
  font-size: 10px;
  padding: 5px;
padding-left: 22%;
padding-right: 22%;
}
}

/* cart design ends here  */

#label123{
  width: 18%;
}

#voicesubmit{
  background-color: #343a40;
  
}
@media screen and (max-width: 575px){
  #label123{
  float: right;
  margin-top: -37px;
  margin-right: -65px;
  width: 24%;

}
#voicesubmit{
  width: 27%;
  float: right;
  margin-right: 199px;

}

}
@media screen and (max-width: 321px){

#voicesubmit{
  width: 27%;
  float: right;
  margin-right: 65px;
}

}
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
  $birthday = $num['birthday'];

    if(password_verify($password , $num['password'])){
      // session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = "$email1";
      $_SESSION['address'] = "$add";
      $_SESSION['name'] = "$name";
      $_SESSION['birthday'] = "$birthday";
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
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
          <li class="nav-item">
            <a class="nav-link" href="freesample.php">Free Sample Papers</a>
          </li>
        
        </ul>
        <form autocomplete="off" class="form-inline my-2 my-lg-0" method = "GET" action="searching.php">
        <div class="autocomplete" >
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name = "search1" id="myInput">
          <label for="myInput" style="color: white; cursor: pointer;" class="form-control" id="label123"><img src="img/voice.jpg" style="max-width: 30px;" alt=""  onclick=record()></label>
      </div>
 
  <input type="submit" class="form-control btn-outline-success" id="voicesubmit" style="margin-left: 5px;">
    </form>
        
  


      </div>
</nav>
</div>
</header>
<!-- header ends here  -->
<div style="margin-top: 56px;"></div>

<!-- slider coding here start -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" >
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <a href="#"><img src="img/1imgslider.jpg" class="d-block w-100" alt="bools world" id="slider_img" ></a>
      
    </div>
    <div class="carousel-item" >
      <img src="img/img-sliders2.jpg" class="d-block w-100" alt="..." id="slider_img">
    </div>
    <div class="carousel-item">
      <img src="img/backgro.jpg" class="d-block w-100" alt="..." id="slider_img">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>  
</div>
<!-- slider ends here  -->


<div style="border-bottom: 5px solid black;"></div>

<?php 

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
$birth = substr($_SESSION['birthday'] , 5 ,5);
// echo $birth;

$current = date("m-d");

if($birth == $current){
   
  echo'<div class="container padding-bottom-3x mb-1"  id="div13211" style="margin-top: 10px;">
  <div class="card mb-3">
    <div class="p-4 text-center text-white text-lg bg-dark rounded-top"><span>
    May the days ahead of you be filled with prosperity, great health and above all joy in its truest and purest form. Happy birthday '.$_SESSION['name'].'</sapn>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" onclick="function1234561();">
    <span aria-hidden="true" style="color: white;">&times;</span>
  </button>
  </div>
    </div>
    </div>';
}
}
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
<!-- user prototype start here  -->

<center>
<a id="buttonnow"  onclick="functiondisplay();" id="a123"><h3 id="h3now" style="font-family: 'Lemonada', cursive; margin-top: 20px; cursor: pointer;"><marquee>For Knowing About your Requirement And Getting A Better User Experience Please Take This Survey On 
Studshops. For Getting Survey Click On Text.

</marquee></h3></a>
</center>



<div id="form-now" style="display: none; border: 2px solid black; padding: 10px;">
   <button type="button" class="close"  onclick="funct1();";>
    <span aria-hidden="true">&times;</span>
  </button>
    <form action="userneed.php" method="POST">
      <label for="inputState">Product Category</label>
      <select id="inputState" class="form-control" name = "cat" style="border: 1px solid black;" id="product" required>
        <option name ="cat" selected>Book</option>
        <option name = "cat">Engineering-Books</option>
        <option name = "cat">Class-Book</option>
        <option name = "cat">Geometry-Items</option>
        <option name = "cat">Engineering-Product</option>

      </select>

      <label for="inputState">Gender</label>
      <select id="inputState" class="form-control" name = "gen" style="border: 1px solid black;" id="product" required>
        <option name ="gen" selected>Both</option>
        <option name = "gen">Boy</option>
        <option name = "gen">Girl</option>
      </select>
      <label for="inputState">Range</label>
      <select id="inputState" class="form-control" name = "range" style="border: 1px solid black;" id="product" required>
        <option name = "range" selected>1000</option>
        <option name = "range">2000</option>
        <option name = "range">3000</option>
   
      </select>
      <label for="product_name">Product Name</label>
      <input type="text" name="product_name" class="form-control"  style="border: 1px solid black;" id="product" aria-describedby="emailHelp" placeholder="Enter your product name which you want to see.">
      <label for="product_name">Gmail-ID</label>
      <input type="text" name="mail" class="form-control"  style="border: 1px solid black;" id="product" aria-describedby="emailHelp" placeholder="Enter your mail for getting details of upcoming offers.">
     
      <center>
        <input type="submit" value="Submit Now" style="margin-top: 15px; color: white; border-radius: 3px; background-color: black; padding: 7px;" 
        onclick="alert('Thank you for share your requirement. Now we can show you product according to your requirement ');">
      </center>
    </form>
  </div>







<!-- card start here  -->

<?php
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true && isset($_COOKIE['userneed_cat'])){
        echo'<hr><fieldset>';
        echo ' <legend>	&nbsp;	<b style="font-size: 20px;">Product For You - ';echo $_SESSION['name']; echo'</b></legend>';
      }
      elseif(isset($_COOKIE['userneed_cat'])){
        echo'<hr><fieldset>';
        echo ' <legend>	&nbsp;	<b style="font-size: 20px;">Product Regarding Your Requirement </b></legend>';
      }
    

  ?>

<?php

// session_start();
if(isset($_COOKIE['userneed_cat'])  && isset($_COOKIE['userneed_gender']) && isset($_COOKIE['userneed_price'])){
  echo '  <div id="div0987" style="background-color: rgb(251, 248, 248); padding: 5px; border: 1px solid black; width: 99%; margin: auto;">';
  $user_cat = $_COOKIE['userneed_cat'];
  $user_gen = $_COOKIE['userneed_gender'];
  $price = $_COOKIE['userneed_price'];
  // intval($price);

  $sql = "SELECT * FROM `product` WHERE cat='$user_cat' && gender='$user_gen' && offer_price<='$price'";
  $result = mysqli_query($conn , $sql);
  $roes = mysqli_num_rows($result);
  // echo $roes;
  if($roes > 0){
    while($row = mysqli_fetch_assoc($result)){
      $name = $row['title'];
      $descr = $row['desc1'];
      $price = $row['price'];
      $snos = $row['sno'];
      $offer_price = $row['offer_price'];
      $save = $price - $offer_price;
    $img = base64_encode($row['image']);
 

    echo ' <div id="div123" style="background-color: white; display: inline-block; border: 2px solid black; margin-left: 1px;">
    <div><a href="product.php?sno='.$snos.'" ><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" id="img112"></a></div>
    <h3 class="tril" id="tril09" style="font-size: 14px;"> '.ucwords(substr("$name",0,23)).'... </h3>
    
    <h3 class="tril" id="h3tri" style="margin-top: 5px;">&#8377;' .$offer_price.'<del id="del123">&#8377;' .$price. '</del></h3>
    <h4 class="tril" id="tirl" style="font-size: 14px; margin-top: -8px;">Save &#8377;' .$save. '</h4>
    <div style="padding: 8px;" id="style121">
    <a href="product.php?sno='.$snos.'" target="blank"><button id="butt1">Buy Now</button></a>
    </div>
    </div>
    ';  }
}

echo '</div>';
}
?>

<hr>
<!-- card ends here  -->




<!-- user prototype ends here  -->
<?php
// include("trial.php");



?>

<!-- card start here  -->

<fieldset>
  <?php
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo ' <legend>	&nbsp;	<b style="font-size: 20px;">Offers For You - ';echo $_SESSION['name']; echo'</b></legend>';
      }
      else{
        echo'
        <legend>	&nbsp;	<b>Best Offers For You:</b></legend>';
      }
  ?>
  <div id="div0987" style="background-color: rgb(251, 248, 248); padding: 5px; border: 1px solid black; width: 99%; margin: auto;">

    <?php

// session_start();
if(isset($_COOKIE['name']) && isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $name = $_COOKIE['name'];
  // $sql = "SELECT * FROM `product` WHERE ";
  $sql = "SELECT * FROM `product` WHERE MATCH (title,desc1) against ('$name') ORDER BY discount LIMIT 12";
  $result = mysqli_query($conn , $sql);
  $roes = mysqli_num_rows($result);
  // echo $roes;
  if($roes > 5){
    while($row = mysqli_fetch_assoc($result)){
      $name = $row['title'];
      $descr = $row['desc1'];
      $price = $row['price'];
      $snos = $row['sno'];
      $offer_price = $row['offer_price'];
      $save = $price - $offer_price;
    $img = base64_encode($row['image']);
    if($offer_price >500){
      $del = "Free Delivery by Studshops over &#8377;500.";
    }
    else{
      $del = "&#8377; 50 rupees charge for home delievery.";
    }

    echo ' <div id="div123" style="background-color: white; display: inline-block; border: 2px solid black; margin-left: 1px;">
    <div><a href="product.php?sno='.$snos.'" ><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt=""  id="img112"></a></div>
    <h3 class="tril" id="tril09" style="font-size: 14px;"> '.ucwords(substr("$name",0,23)).'... </h3>
    
    <h3 class="tril" id="h3tri" style="margin-top: 5px;">&#8377;' .$offer_price.'<del id="del123">&#8377;' .$price. '</del></h3>
    <h4 class="tril" id="tirl" style="font-size: 14px; margin-top: -8px;">Save &#8377;' .$save. '</h4>
    <div style="padding: 8px;" id="style121">
    <a href="product.php?sno='.$snos.'" target="blank"><button id="butt1">Buy Now</button></a>
    </div>
    </div>
    ';  }
}
else{
  $sql = "SELECT * FROM `product` ORDER BY offer_price LIMIT 12";
$result = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($result)){
  $name = $row['title'];
  $descr = $row['desc1'];
  $price = $row['price'];
  $snos = $row['sno'];
  $offer_price = $row['offer_price'];
  $save = $price - $offer_price;
  $img = base64_encode($row['image']);
  if($offer_price >500){
    $del = "Free Delivery by Studshops over &#8377;500.";
  }
  else{
    $del = "&#8377; 50 rupees charge for home delievery.";
  }

  echo ' <div id="div123" style="background-color: white; display: inline-block; border: 2px solid black; margin-left: 1px;">
  <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" id="img112"></a></div>
  <h3 class="tril" id="tril09" style="font-size: 14px;"> '.ucwords(substr("$name",0,23)).'... </h3>
  
  <h3 class="tril" id="h3tri" style="margin-top: 5px;">&#8377;' .$offer_price.'<del id="del123">&#8377;' .$price. '</del></h3>
  <h4 class="tril" id="tirl" style="font-size: 14px; margin-top: -8px;">Save &#8377;' .$save. '</h4>
  <div style="padding: 8px;" id="style121">
  <a href="product.php?sno='.$snos.'" target="blank"><button id="butt1">Buy Now</button></a>
  </div>
  </div>
  ';
} 
}
}
  else{
    $sql = "SELECT * FROM `product` ORDER BY offer_price LIMIT 12";
$result = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($result)){
  $name = $row['title'];
  $descr = $row['desc1'];
  $price = $row['price'];
  $snos = $row['sno'];
  $offer_price = $row['offer_price'];
  $save = $price - $offer_price;
  $img = base64_encode($row['image']);
  if($offer_price >500){
    $del = "Free Delivery by Studshops over &#8377;500.";
  }
  else{
    $del = "&#8377; 50 rupees charge for home delievery.";
  }

  echo ' <div id="div123" style="background-color: white; display: inline-block; border: 2px solid black; margin-left: 1px;">
  <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt=""  id="img112"></a></div>
  <h3 class="tril" id="tril09" style="font-size: 14px;"> '.ucwords(substr("$name",0,23)).'... </h3>
  
  <h3 class="tril" id="h3tri" style="margin-top: 5px;">&#8377;' .$offer_price.'<del id="del123">&#8377;' .$price. '</del></h3>
  <h4 class="tril" id="tirl" style="font-size: 14px; margin-top: -8px;">Save &#8377;' .$save. '</h4>
  <div style="padding: 8px;" id="style121">
  <a href="product.php?sno='.$snos.'" target="blank"><button id="butt1">Buy Now</button></a>
  </div>
  </div>
  ';
}
  }


?>
</div>

<hr>
<!-- card ends here  -->




<!-- quiz competition start here  -->
  <div style=" width: 95%; margin: auto;">
    <a href="#" style="margin-left: 1%; cursor: pointer;"  onclick="alert('Quiz Competition started from 25th october 2020. First Prize is 51000/- rupees. Any tricky question is asked in brain quiz');">
    <img src="img/pd1.jpg" style="width: 23%; border-radius: 90%;  border: 2px solid black;" id="img12now" alt=""></a>
    <a href="#" style="margin-left: 1%;" onclick="alert('Class Quiz competition started from 15th november. First Price is 21000/- School classes question is asked in this quiz.');">
    <img src="img/imagepro.jpg" style="width: 22.5%; border-radius: 90%;  border: 2px solid black; " id="img12now" alt=""></a>
    <a href="#" style="margin-left: 1%;"  onclick="alert('College quiz competition started from 25th november. First Price 31000/- College level question is asked in this quiz');">
    <img src="img/pd3.jpg" style="width: 22.5%; border-radius: 90%;   border: 2px solid black;" id="img12now" alt=""></a>
    <a href="#" style="margin-left: 1%;" onclick="alert('Topper competition started from 30th november. First Price is 41000/- High College level question is asked in this quiz');">
    <img src="img/succ.jpg" style="width: 22.5%; border-radius: 90%;  border: 2px solid black;" id="img12now" alt=""></a>
  </div>
  <h5 style="display: inline; " id="headingquiz1">Brain quiz</h5>
  <h5 style="display: inline; " id="headingquiz">School Quiz</h5>
  <h5 style="display: inline; " id="headingquiz">College Quiz</h5>
  <h5 style="display: inline; " id="headingquiz4">Topper Quiz</h5>

<div style="margin-top: 50px;">

</div>
<!-- quiz competition ends here -->



<!-- rama and islam and crist and sikh ends here  -->

  <div id="img12121" style="width: 93%; border: 2px solid black; margin: auto;"><a href="hindu.php" style="cursor: pointer;"><img src="img/ramaji.jpg" alt="" srcset="" id="img123456" style="width: 100%; "></div>
  <div style="margin-top: 20px;"></a></div>
  <div style=" width: 93%; margin: auto;">
  <div id="imgnow12" style="float: right; border: 2px solid black; display: inline; width: 63%;"><a href="muslim.php" style="cursor: pointer;"><img src="img/quran.jpg" alt="" srcset="" id="moth12" style="width: 100%;  float: right;"></a></div>
  <div id="img1212" style="margin-bottom: 15px;"><a href="sikh.php" style="cursor: pointer;"><img src="img/guru.jpg" alt="" srcset="" style=" border: 2px solid black; width: 35.5%;" id="img1231"></a></div>
  <div id="img1212"><a href="crist.php" style="cursor: pointer;"><img src="img/bible.jpg" alt="" srcset="" style=" border: 2px solid black;   width: 35.5%;" id="img1231"></a></div>
</div>

<div style="margin-top: 20px;"></div>
<!-- rama and islam and crist and sikh ends here  -->

<hr>
<!-- second carts start here  -->
<fieldset>
  <legend>	&nbsp;	<b>Best Offers On Book:</b></legend>
  <div id="div0987" style="background-color: rgb(251, 248, 248); padding: 5px; border: 1px solid black; width: 99%; margin: auto;">

<?php
$sql = "SELECT * FROM `product` WHERE cat = 'Book' ORDER BY discount LIMIT 12";
$results = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($results)){
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


    echo ' <div id="div123" style="background-color: white; display: inline-block; border: 2px solid black; margin-left: 1px;">
    <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt=""  id="img112"></a></div>
    <h3 class="tril" id="tril09" style="font-size: 14px;"> '.ucwords(substr("$name",0,23)).'... </h3>
    
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


<!-- seconds cart ends here  -->



<div style="margin-bottom: 20px;"></div>
<?php

include("imagecat.php");
?>
<div style="margin-top: 70px;">
</div>

<!-- books template starts here  -->
<div style=" width: 98%; margin: auto; border: 2px solid black; border-radius: 5px;">
  <a href="school.php" style="margin: auto;"><img src="img/school1.jpg" alt="" id="div109" style="width: 100%; margin: auto; " ></a>
  </div>
<div style="margin-top: 10px;"></div>
<div style=" width: 98%; margin: auto; border: 2px solid black; border-radius: 5px;">
<a href="#"><img src="img/usedbook.jpg" alt=""  id="div109" style="width: 100%; margin: auto;"></a>
</div>
<!-- books template ends here  -->




<!-- second carts start here  -->
<fieldset>
  <legend>	&nbsp;	<b>Best Offers On Study Products:</b></legend>
  <div id="div0987" style="background-color: rgb(251, 248, 248); padding: 5px; border: 1px solid black; width: 99%; margin: auto;">

<?php
$sql = "SELECT * FROM `product` WHERE cat = 'Geometry-Items' ORDER BY discount LIMIT 6";
$results = mysqli_query($conn , $sql);

while($row = mysqli_fetch_assoc($results)){
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


    echo ' <div id="div123" style="background-color: white; display: inline-block; border: 2px solid black; margin-left: 1px;">
    <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" id="img112"></a></div>
    <h3 class="tril" id="tril09" style="font-size: 14px;"> '.ucwords(substr("$name",0,23)).'... </h3>
    
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


<!-- seconds cart ends here  -->

<!-- membership start here  -->
<div style="border: 2px solid black; background-color: black;">

    <h2 style="text-align:center" id="gol" class="glow">Get Royal Membership</h2>

</div>


<div class="columns">
  <ul class="price">
    <li class="header">Silver</li>
    <li class="grey">&#8377; 100 / month</li>
    <li>Free Deliver over &#8377; 300</li>
    <li>Best Offers Over &#8377; 500</li>
    <li>Under 60 hr delivery</li>
    <li>Get free 10 sample paper pdf per month</li>
    <li class="grey"><a h ref="#" class="button">Get Now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header" style="background-color:#4CAF50">Gold</li>
    <li class="grey">&#8377; 200 / month</li>
    <li>Free Delivery over &#8377; 500 </li>
    <li>Best Offers Over &#8377; 1000</li>
    <li>Under 48 hr delivery</li>
    <li>Availble free sample paper</li>
    <li class="grey"><a href="#" class="button">Get Now</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header">Diamond</li>
    <li class="grey">&#8377; 500 / month</li>
    <li>Free Delivery</li>
    <li>Best Offers on all products</li>
    <li>Under 24 hour product Delivery</li>
    <li>Available Free Sample Paper Pdf</li>
    <li class="grey"><a href="#" class="button">Get Now</a></li>
  </ul>
</div>
<br><br>
<center><small>Become a studshops member</small></center>
<!-- membership ends here  -->






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



  <script>

    function functiondisplay(){
      document.getElementById('form-now').style.display = "block";

    }
    function funct1(){
      document.getElementById('form-now').style.display = "none";
    }
    function function1234561(){
  document.getElementById('div13211').style.display = "none";

}
  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script>

function record(){
    var recognition = new webkitSpeechRecognition();
    recognition.lang = "en-GB";

    recognition.onresult = function(event){

        console.log(event);
        document.getElementById('myInput').value = event.results[0][0].transcript;
    }

    recognition.start();
}
</script>
    <script src="autocomplete.js"></script>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
