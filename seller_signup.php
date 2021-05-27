<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hello, world!</title>
  </head>

  <style>


  </style>
  <body>
    <div class="fixed-top">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <svg width="2.5em" height="2.5em" style="margin-right: 13px; background-color: white; padding: 3px;" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
      <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
    </svg>
  <a class="navbar-brand" href="#">Studshop <small>.com</small></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div style=""></div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <!-- <a class="nav-link" href="login_seller.php">SellerLogin</a> -->
        <a class="nav-link" href="login_seller.php">SellerLogin</a>
      </li>
     

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Sign Up</a>
          <a class="dropdown-item" href="#">Login</a>


          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Forget UserId and Password</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Free Sample Papers</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</div>

<?php



$err = false;
$err1 = false;
$succ = false;

include("connection.php");
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $_POST['email'];
    $aadhars = $_POST['aadhars'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $hash = password_hash($password , PASSWORD_DEFAULT);


    $sql = "SELECT * FROM `login` WHERE username='$username'";
    $result = mysqli_query($conn , $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        $err = true;

    }
    else{
        $sql = "INSERT INTO `login` (`name`,`username`, `password`, `aadhar`, `dt`) VALUES ('$name','$username', '$hash', '$aadhars', current_timestamp())";
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
    
    echo '<div style="margin: 57px auto;"><div class="alert alert-warning success-dismissible fade show" role="alert">
    <strong>Error:</strong> Already have a account through this gmail id on Studshop<small>.com</small>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>';
}
elseif($succ){
    echo '<div style="margin: 57px auto;"><div class="alert alert-success alert-dismissible fade show" role="success">
    <strong>Success</strong> You have successfull sign up as a seller in Studshop<small>.com</small>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>';
}

elseif($err1){
    die ('<div style="margin: 57px auto;"><div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Error</strong> We have facing some technical issue. Plz Try again later.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div></div>');
}
?>

</div>

<!-- sign up page start here  -->

<div style="margin: 100px auto; padding: 20px; background-color: rgb(245, 240, 240); border: 2px solid black;">
<center>
<h3>Seller Registrtion here </h3>
<img src="img/signup.jpg" alt="Sign Up Form" srcset="" style="width: 100px; height: 100px;"></center>
<form action="seller_signup.php" method="post">
<div class="form-group">
    <label for="name">Owner Name</label>
    <input type="aadhar" class="form-control" name="name" id="name" placeholder="Enter your name" required>
    
  </div>
  <div class="form-group">
    <label for="email">Gmail Id</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your Gmail Id." required>

  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password." required>
  </div>
  <div class="form-group">
    <label for="aadhars">Addhar No</label>
    <input type="aadhar" class="form-control" name="aadhars" id="aadhar" placeholder="Enter your aadhar." required>
    <small id="emailHelp" class="form-text text-muted">Aadhar No is required for verification</small>
  </div>


  <div class="custom-control custom-checkbox mb-3">
    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
    <label class="custom-control-label" for="customControlValidation1">Accept all terms and conditions </label>
    <div class="invalid-feedback">Example invalid feedback text</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



<!-- sign up page ends here  -->


<!-- terms and conditin for seller  -->
<center>
  <h3>Terms and conditions</h3>
</center>
<ul class="list-group list-group-flush">
  <li class="list-group-item">Every user have must aadhar card</li>
  <li class="list-group-item">Every user have must prepare order under 24hours when user buy product</li>
  <li class="list-group-item">Studshop takes 10% charge on each product </li>
  <li class="list-group-item">No duplicate product are sell in studshop.</li>
  <li class="list-group-item">Write brief details of product for user satisfaction.</li>

</ul>






  <!-- footer starts here  -->
<hr>
  <div id="page-content" style="background-color: #007bff;">
    <div class="container text-center">
      <div class="row justify-content-center">
        <div class="col-md-7">
          <h1 class="font-weight-light mt-4 text-white"><a href="seller_signup.php" style="color: white; text-decoration: none;">Welcome as a seller.</a></h1>
          <p class="lead text-white-50">Plz read all term and condition before sign up.</p>
        </div>
      </div>
    </div>
  </div>
  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; studshop.com</small>
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

        


