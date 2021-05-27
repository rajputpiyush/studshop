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
    <link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@400;600&display=swap" rel="stylesheet">
    <title>Home</title>
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
@media screen and (max-width: 425px) {

  #gol{
      font-size: 60px;
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

   
#h3now{
 
 margin-top: 10px;
font-size: 20px;
font-family: 'Lemonada', cursive;
cursor: pointer;
margin-bottom: -20px;

}

#img1234{
  width: 250px;
  height: 250px;
  margin-left: 100px;
  border: 3px solid black;
 

}
#h543{
  margin-top: 20px;
  margin-left: 150px;
  color: black;
  font-size: 30px;
}
#buttonnow{
background-color: white;
border: 2px solid white;


}
#buttonnow:hover{

  color: blue;

  transition: 700ms;
}
#form-now{
  border: 2px solid black;
  padding: 10px;
  margin-top: 20px;
  background-color: rgb(248, 248, 248);
}
/* main blocks design start here  */
#img12121{
  margin-left: 100px;
  border: 2px solid black;

}
#img123456{
  width: 1300px;
  height: 300px;
}
#img1212{
  margin-left: 100px;
  margin-top: 20px;
}
#img1231{
  max-width: 400px;
}
#moth12{
  width: 880px;
  height: 540px;
}
#imgnow12{
  margin-top: 20px;  
  margin-right: 115px;
}
/* main block design ends here  */

@media screen and (max-width: 1441px){

/* main blocks design start here  */
#img12121{
  margin-left: 10px;
  border: 2px solid black;

}
#img123456{
  width: 1400px;
  height: 400px;
}
#img1212{
  margin-left: 10px;
  margin-top: 20px;
}
#img1231{
  max-width: 500px;
}
#moth12{
  max-width: 880px;
  height: 670px;
}
#imgnow12{
  margin-top: 20px;  
  margin-right: 15px;
}
/* main blcok design ends here  */


#img1234{
  width: 220px;
  height: 220px;
  margin-left: 110px;
  border: 3px solid black;
}
#h543{
  margin-top: 20px;
  margin-left: 140px;
  color: black;
  font-size: 30px;
}
#slider_img{
max-width: 100%;
margin-top: 55px;
max-height: 600px;
} 
}
@media screen and (max-width: 1025px){

/* main blocks design start here  */
#img12121{
  margin-left: 10px;
  border: 2px solid black;

}
#img123456{
  width: 1000px;
  height: 400px;
}
#img1212{
  margin-left: 10px;
  margin-top: 20px;
}
#img1231{
  max-width: 350px;
}
#moth12{
  max-width: 630px;
  height: 480px;
}
#imgnow12{
  margin-top: 20px;  
  margin-right: 15px;
}
/* main blcok design ends here  */


#img1234{
  width: 170px;
  height: 170px;
  margin-left: 60px;
  border: 3px solid black;
}
#h543{
  margin-top: 20px;
  margin-left: 70px;
  color: black;
  font-size: 30px;
}
#slider_img{
max-width: 100%;
margin-top: 55px;
max-height: 600px;
} 
}

@media screen and (max-width: 427px){



/* main blocks design start here  */
#img12121{
  margin-left: 10px;
  border: 2px solid black;

}
#img123456{
  width: 430px;
  height: 200px;
}
#img1212{
  margin-left: 10px;
  margin-top: 20px;
}
#img1231{
  max-width: 150px;
}
#moth12{
  max-width: 260px;
  height: 215px;
}
#imgnow12{
  margin-top: 20px;  
  margin-right: 15px;
}
/* main blcok design ends here  */
  #img1234{
  width: 95px;
  height: 95px;
  margin-left: 13px;
}


#h543{
  margin-top: 5px;
  margin-left: 20px;
  color: black;
  font-size: 15px;
}
#butt1{
        font-size: 10px;
        padding: 5px;
        font-weight: bolder;
        padding-left: 17px;
        padding-right: 17px;
        margin-left: 5px;
        margin-top: -10px;
        /* margin-bottom: 10px; */
    }
    div #img112{
    height: 80px;
    max-width: 101px;
    padding-left: 0.7px;
}
    #btnsearch{
      /* background-color: green; */
      font-size: 15px;
      padding: 10px;
      height: 50px;
    }
    #div123{
        width: 106px;
        height: 215px;
        margin: 5px 0px;
    }
    h3 #del123{
  font-size: 12px;
}
#slider_img{
max-width: 100%;
margin-top: 55px;
max-height: 200px;
} 
 
 body{
   margin-right: -35px;
 }
}


@media screen and (max-width: 414px){



/* main blocks design start here  */
#img12121{
  margin-left: 10px;
  border: 2px solid black;

}
#img123456{
  width: 380px;
  height: 200px;
}
#img1212{
  margin-left: 10px;
  margin-top: 20px;
}
#img1231{
  max-width: 150px;
}
#moth12{
  max-width: 220px;
  height: 205px;
}
#imgnow12{
  margin-top: 20px;  
  margin-right: 15px;
}
/* main blcok design ends here  */
  #img1234{
  width: 95px;
  height: 95px;
  margin-left: 3px;
}


#h543{
  margin-top: 5px;
  margin-left: 10px;
  color: black;
  font-size: 15px;
}
#butt1{
        font-size: 12px;
        padding: 5px;
        font-weight: bolder;
        padding-left: 22px;
        padding-right: 22px;
        margin-left: 5px;
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
    div #img112{
    height: 80px;
    max-width: 113px;
    padding-left: 0.7px;
}

   
    h3 #del123{
  font-size: 12px;
}
#slider_img{
max-width: 100%;
margin-top: 55px;
max-height: 180px;
} 
body{
  margin-right: 0px;
}
 
}


@media screen and (max-width: 376px){
  
  
  
  /* main blocks design start here  */
#img12121{
  margin-left: 10px;
  border: 2px solid black;

}
#img123456{
  width: 330px;
  height: 200px;
}
#img1212{
  margin-left: 10px;
  margin-top: 20px;
}
#img1231{
  max-width: 120px;
}
#moth12{
  max-width: 200px;
  height: 170px;
}
#imgnow12{
  margin-top: 20px;  
  margin-right: 15px;
}
/* main blcok design ends here  */
  #img1234{
  width: 83px;
  height: 83px;
  margin-left: 3px;
}

#h543{
  margin-top: 5px;
  margin-left: 10px;
  font-size: 13px;
  color: black;
}
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














@media screen and (max-width: 322px){
  
  
  
  /* main blocks design start here  */
#img12121{
  margin-left: 10px;
  border: 2px solid black;

}
#img123456{
  width: 315px;
  height: 200px;
}
#img1212{
  margin-left: 10px;
  margin-top: 20px;
}
#img1231{
  max-width: 110px;
}
#moth12{
  max-width: 190px;
  height: 160px;
}
#imgnow12{
  margin-top: 20px;  
  margin-right: 17px;
}
/* main blcok design ends here  */
  #img1234{
  width: 75px;
  height: 75px;
  margin-left: 3px;
}

#h543{
  margin-top: 5px;
  margin-left: 10px;
  font-size: 13px;
  color: black;
}
  #slider_img{
max-width: 110%;
margin-top: 55px;
max-height: 140px;

} 
  #div123{
    width: 100px;
    height: 205px;
    height: 205px;
    margin: 1px;

    
  }
  #div0987{
    width: 335px;
  }
  div #img112{
    height: 80px;
    max-width: 95px;
    padding-left: 0.7px;
}
div #div109{
    max-height: 100px;
    max-width: 98%;
}
h3 #del123{
  font-size: 11px;
}
#butt1{
  padding-left: 14px;
  /* font-size: 2px; */
}
body{
  margin-right: -25.5px;
}

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
        <form class="form-inline my-2 my-lg-0" method = "GET" action="searching.php">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name = "search1">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name= "search1">Search</button> -->
      <input type="hidden"  class="btn btn-outline-success my-2 my-sm-0" value="Submit">
    </form>
        
      </div>
</nav>
</div>
</header>
<!-- header ends here  -->
<!-- slider coding here start -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <a href="#"><img src="img/1imgslider.jpg" class="d-block w-100" alt="bools world" id="slider_img" style="height: 28rem;"></a>
      
    </div>
    <div class="carousel-item" >
      <img src="img/img-sliders2.jpg" class="d-block w-100" alt="..." id="slider_img" style="height: 28rem;">
    </div>
    <div class="carousel-item">
      <img src="img/backgro.jpg" class="d-block w-100" alt="..." id="slider_img" style="height: 28rem;">
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


<!-- user prototype start here  -->

<center>
<a id="buttonnow"  onclick="functiondisplay();" id="a123"><h3 id="h3now"><marquee>For Knowing About your Requirement And Getting A Better User Experience Please Take This Survey On 
Studshops. For Getting Survey Click On Text.

</marquee></h3></a>
</center>

   <div id="form-now" style="display: none;">
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
  echo '<div id="div0987" style="background-color: rgbrgb(251, 248, 248); padding: 5px; border: 1px solid black; margin: 5px;">';
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
 

    echo ' <div id="div123" style="background-color: white;">
    <div><a href="product.php?sno='.$snos.'" ><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" style="width: 15rem;" height="200rem"; id="img112"></a></div>
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








<!-- card start here  -->

<fieldset>
  <?php
      if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
        echo ' <legend>	&nbsp;	<b style="font-size: 20px;">Offers For You - ';echo $_SESSION['name']; echo'</b></legend>';
      }
      else{
        echo'
        <legend>	&nbsp;	<b>Best offers for you:</b></legend>';
      }
  ?>
  <div id="div0987" style="background-color: rgbrgb(251, 248, 248); padding: 5px; border: 1px solid black; margin: 5px;">

    <?php

// session_start();
if(isset($_COOKIE['name']) && isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $name = $_COOKIE['name'];
  // $sql = "SELECT * FROM `product` WHERE ";
  $sql = "SELECT * FROM `product` WHERE MATCH (title,desc1) against ('$name') ORDER BY offer_price LIMIT 12";
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

    echo ' <div id="div123" style="background-color: white;">
    <div><a href="product.php?sno='.$snos.'" ><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" style="width: 15rem;" height="200rem"; id="img112"></a></div>
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

  echo ' <div id="div123" style="background-color: white;">
  <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" style="width: 15rem;" height="200rem"; id="img112"></a></div>
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

  echo ' <div id="div123" style="background-color: white;">
  <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" style="width: 15rem;" height="200rem"; id="img112"></a></div>
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



<div style=" display: inline-block;">

  <div style=" display: inline-block;">
    <a href="#" style=" display: inline-block; cursor: pointer;" onclick="alert('Quiz Competition started from 25th october 2020. First Prize is 51000/- rupees. Any tricky question is asked in brain quiz');" >
      <img src="img/pd1.jpg" alt="" srcset="" id="img1234" style="border-radius: 300px; ">
    <h5 id="h543">Brain Quiz</h5></a>
  </div>
  <div style=" display: inline-block;">
    <a style=" display: inline-block; cursor: pointer;" href="#" onclick="alert('Class Quiz competition started from 15th november. First Price is 21000/- School classes question is asked in this quiz.');"><img src="img/pd3.jpg" alt="" srcset="" id="img1234" style="border-radius: 300px;">
      <h5 id="h543">Class Quiz</h5></a>
  </div>
  <div style=" display: inline-block;">
    <a href="#" style=" display: inline-block; cursor: pointer;" onclick="alert('College quiz competition started from 25th november. First Price 31000/- College level question is asked in this quiz');"><img src="img/imagepro.jpg" alt="" srcset="" id="img1234" style="border-radius: 300px; ">
      <h5 id="h543">College Quiz</h5></a>
  </div>
  <div style=" display: inline-block;">
    <a href="#" style=" display: inline-block; cursor: pointer;" onclick="alert('college quiz competition started from 30th november. First Price is 41000/- High College level question is asked in this quiz');"><img src="img/succ.jpg" alt="" srcset="" id="img1234" style="border-radius: 300px; ">
      <h5 id="h543">Topper Quiz</h5></a>
  </div>

</div>




<div>
  <div id="img12121" style="display: inline-block;"><img src="img/rama.jpg" alt="" srcset="" id="img123456"></div>
  <div id="imgnow12"><h3 style="border: 2px solid black; display: inline-block; float: right;"><img src="img/quran.jpg" alt="" srcset="" id="moth12"></div>
  <div id="img1212"><img src="img/guru.jpg" alt="" srcset="" style=" border: 2px solid black; display: inline-block;" id="img1231"></div>
  <div id="img1212"><img src="img/bible.jpg" alt="" srcset="" style=" border: 2px solid black; display: inline-block;" id="img1231"></div>
</div>





<hr>
<!-- second carts start here  -->
<fieldset>
  <legend>	&nbsp;	<b>Best Offers On Book:</b></legend>
  <div id="div0987" style="background-color: rgb(251, 248, 248); padding: 5px; border: 1px solid black; margin: 5px;">

<?php
$sql = "SELECT * FROM `product` WHERE cat = 'Book' ORDER BY offer_price LIMIT 6";
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


    echo ' <div id="div123" style="background-color: white;">
    <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" style="width: 15rem;" height="200rem"; id="img112"></a></div>
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


<!-- used book template start here  -->

<!-- template starts here  -->
<div>
  <a href="school.php"><img src="img/school1.jpg" alt="" id="div109" style="width: 94.4rem; height:15rem; margin-left: 4px; margin-right: 4px;
   margin-top: 20px; border: 4px solid black; border-radius: 15px;" ></a>
  </div>
  <!-- templates ends here  -->
<div>
<a href="#"><img src="img/usedbook.jpg" alt=""  id="div109" style="width: 94.4rem; height:15rem; margin-left: 4px; margin-right: 4px;
 margin-top: 20px; border: 4px solid black; border-radius: 15px;"></a>
</div>



<!-- books template ends here  -->
<br>


<!-- second carts start here  -->
<fieldset>
  <legend>	&nbsp;	<b>Best Offers On Study Products:</b></legend>
  <div id="div0987" style="background-color: rgb(251, 248, 248); padding: 5px; border: 1px solid black; margin: 5px;">

<?php
$sql = "SELECT * FROM `product` WHERE cat = 'Geometry-Items' ORDER BY offer_price LIMIT 6";
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


    echo ' <div id="div123" style="background-color: white;">
    <div><a href="product.php?sno='.$snos.'"><img src="data:image/jpg;charset=utf8;base64,'.$img.'" alt="" style="width: 15rem;" height="200rem"; id="img112"></a></div>
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



<br>
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
    <li class="grey"><a href="#" class="button">Get Now</a></li>
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
<center><small>Become a studshop membeer</small></center>
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










  <script>

    function functiondisplay(){
      document.getElementById('form-now').style.display = "block";

    }
    function funct1(){
      document.getElementById('form-now').style.display = "none";
    }
  </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
