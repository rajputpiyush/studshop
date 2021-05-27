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

    <title>Hello, world!</title>

  </head>
  <style>
      body{
		background-color: #25274d;
	}
	.contact{
		padding: 4%;
		height: 400px;
		margin-bottom: 150px;
	}
	.col-md-3{
		background: #ff9b00;
		padding: 4%;
		border-top-left-radius: 0.5rem;
		border-bottom-left-radius: 0.5rem;
	}
	.contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	}
	.col-md-9{
		background: #fff;
		padding: 3%;
		border-top-right-radius: 0.5rem;
		border-bottom-right-radius: 0.5rem;
	}
	.contact-form label{
		font-weight:600;
	}
	.contact-form button{
		background: #25274d;
		color: #fff;
		font-weight: 600;
		width: 25%;
	}
	.contact-form button:focus{
		box-shadow:none;
	}
  </style>
  <body>
  <div class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
    <svg width="2.5em" height="2.5em" style="margin-right: 13px; background-color: white; padding: 3px;" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
      <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
    </svg>
  <a class="navbar-brand" href="index.php">Studshop <small>.com</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div style=""></div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">SellerLogin <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="seller_signup.php">Signup</a>
      </li>
     


    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
</div>
</header>

<!-- header ends here  -->




<!-- sign up page start here  -->




<div style="margin-top: 50px;"></div>

<div class="container contact">
	<div class="row" style="border: 3px solid black;">
		<div class="col-md-3">
			<div class="contact-info">

				<h2>Sign In</h2>
        <h4>We would love to see you here. You are our partners.</h4>
      
			</div>
		</div>
		<div class="col-md-9" style="border: 1px solid black;">
			<div class="contact-form">
				<div class="form-group">
				<h5><?php $result; ?></h5>
				<form action="login_seller.php" method="POST">
				  <label class="control-label col-sm-2" for="email">Gmail Id:</label>
				  <div class="col-sm-10">          
					<input type="email" class="form-control" id="email" placeholder="Enter Your Gmail Id..." name="email">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="password">Password:</label>
				  <div class="col-sm-10">          
					<input type="password" class="form-control" id="password" placeholder="Enter Your Password..." name="password">
				  </div>
				</div>
			
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" style="background-color: green; height: 40px; width: 80px;">Submit</button>
				  </div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- sign up page ends here  -->
<?php

include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $loggedin = false;
    $username = $_POST['email'];
    $password = $_POST['password'];
    // $name = $_POST['name'];
    $sql = "SELECT * FROM `login` WHERE username='$username'";
    $result = mysqli_query($conn , $sql);
    $row = mysqli_num_rows($result);
    if($row == 1){
        while($num = mysqli_fetch_assoc($result)){
            if(password_verify($password , $num['password'])){
               session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = "$username";
                header("location: seller_working.php");
            }
            else{
              echo '<script>alert("Incorrect Password. Please enter a correct password.")</script>'; 
            }
        }
    }
    else{
      echo '<script>alert("Incorrect Uername. Please enter a correct username.")</script>'; 
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>


