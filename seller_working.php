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
  /* seller form start here */
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

  /* seller form ends here  */
  </style>
  <script>
    function func1(){
      document.getElementById("div143").style.display = 'inline';
      document.getElementById("but090").style.display = 'inline';
    }
    function func2(){
      document.getElementById("but090").style.display = 'none';
      document.getElementById("div143").style.display = 'none';
    }
  </script>
  <body>
      

<?php
 
$success = false;
$error = false;

?>


  <!-- header start here  -->
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
<div style=""></div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Seller Workplace <span class="sr-only">(current)</span></a>

      </li>
      <li class="nav-item">
        <a class="nav-link " href="logout.php" onclick="return confirm('Are you sure you want to logout?');"> logout</a>
      </li>
     

      

  </div>
</nav>
</div>
<!-- header ends here  -->


<?php
include('connection.php');
if($_SERVER['REQUEST_METHOD']=="POST"){
  if(strlen($_POST['product']) < 60){
    $title = $_POST['product'];
    $title1 = strtolower($title);
    $descr = $_POST['desce'];
    $price = $_POST['price'];
    $oprice = $_POST['oprice'];
    $name = $_POST['gmail'];
    $set = $_SESSION['username'];
    $prod = $_POST['pro'];
    $qualitys = $_POST['quality'];
    $fileName = basename($_FILES["image"]["name"]); 
    $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 

    $filename1 = basename($_FILES["image1"]["name"]);
    $fileType1 = pathinfo($filename1, PATHINFO_EXTENSION);

    $filename2 = basename($_FILES["image3"]["name"]);
    $filetype2 = pathinfo($filename2, PATHINFO_EXTENSION);

    $allowTypes = array('jpg','png','jpeg',); 
    if($set == $name){
      $sql = "SELECT * FROM `product` WHERE title = '$title' AND usernames = '$set'";
      $result = mysqli_query($conn , $sql);
      $numss = mysqli_num_rows($result);
      while($ns12 = mysqli_fetch_assoc($result)){
        $sno = $ns12['sno'];
      }
      if($numss == 0){
        $sql = "SELECT * FROM `prduct`";
         
        // Allow certain file formats 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 

            $image1 = $_FILES['image1']['tmp_name'];
            $imgContent1 = addslashes(file_get_contents($image1));

            $image3 = $_FILES['image3']['tmp_name'];
            $imgContent3 = addslashes(file_get_contents($image3));
         
            // Insert image content into database 
            // $sql = "INSERT into `images` (`image`,`uploaded`) VALUES ('$imgContent', NOW())";
        $sql = "INSERT INTO `product` ( `title`, `desc1`, `price`, `offer_price`,`usernames` , `cat` ,`image`,`image1`,`image2`,`quality`)
         VALUES ('$title1', '$descr', '$price', '$oprice', '$name' ,'$prod','$imgContent','$imgContent1','$imgContent3','$qualitys')";
        $result = mysqli_query($conn, $sql);
        if($result){ 
          echo '<div style="margin-top: 55px; margin-bottom: -80px;"><div class="alert alert-success alert-dismissible fade show" role="success" style=" border: 2px solid black;">
          <strong>Success! </strong>Your product is successfull add on studshop<small>.com</small>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
          </div></div>';
        }
      } // and of array type
      else{
        echo '<div style="margin-top: 55px; margin-bottom: -80px;"><div class="alert alert-warning alert-dismissible fade show" role="success" style=" border: 2px solid black;">
        <strong>Error! </strong>Only allow jpg , png , jpeg file format.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div></div>';
      }
      }
    else{
      echo '<div style="margin-top: 55px; margin-bottom: -80px;"><div class="alert alert-warning alert-dismissible fade show" role="success" style=" border: 2px solid black;">
      <strong>Error! </strong>This product is already available on studshop<small>.com</small> Please check your product in product list below.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div></div>';
    }
      
      
    }
      else{
        echo '<div style="margin-top: 55px; margin-bottom: -80px;"><div class="alert alert-warning alert-dismissible fade show" role="success" style=" border: 2px solid black;">
        <strong>Error! </strong>Username is incorrect. Please enter a valid username.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div></div>';
        }
  
  } // str len function ends here

  else{
    echo '<div style="margin-top: 55px; margin-bottom: -80px;"><div class="alert alert-warning alert-dismissible fade show" role="success" style=" border: 2px solid black;">
        <strong>Error! </strong>Please enter a product name less than under 60 words.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div></div>';
  }
    } //request method ends here
  else{
    echo"not";
  }
  

?>

<!-- header ends here  -->
<br><br><br>



<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

  $succ = false;
  $names = $_SESSION['username'];
  $sql = "SELECT * FROM `login` WHERE  username='$names'";
  $result = mysqli_query($conn, $sql);
  $rew = mysqli_num_rows($result);
  while($roes = mysqli_fetch_assoc($result)){
    $name1 = $roes['name'];
    // echo "<center><h2><br>Welcome : " .$name1. "</h2></center>"; 
    echo'<div class="alert alert-success" role="alert">
    <center><h4 class="alert-heading">Welcome: ' .$name1.' </h4></center>
    <p align="justify">Hi ' .$name1.'. This is your workspace. Firstly read all terms and conditions then add any product.
    Always update with us and if you have any problem then contacts. Our gmail Id is studshop@gmail<small>.com</small>
    Always remember logout when you have finish your work. Don\'t share your Gmail ID and Passaword with anyone. </p>
    <hr>
    <p class="mb-0">Set real price of product for getting best buyers.</p>
  </div>';
    
  }
  }
else{
  header("location: login_seller.php");
  }



?>


<!-- <center><h3 style="margin-top: 20px; color: green;">Upload your product on studshop<small>.com</small></h3>
<small><strong>Note! </strong>&nbsp;Try to upload image dimension(1024 , 768) for get better view of product</small></center> -->
<!-- product enter starts here  -->
<!-- <div style="margin: 20px auto; padding: 20px; background-color: rgb(245, 240, 240); border: 2px solid black;">
<center>

<form action="seller_working.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="gmail">Gmail ID</label>
    <input type="text" name="gmail" class="form-control" id="gmail" aria-describedby="emailHelp" placeholder="Enter your Gmail ID once again for security." required>

  </div>
  <div class="form-group">
    <label for="product">Product Name</label>
    <input type="text" name="product" class="form-control" id="product" aria-describedby="emailHelp" placeholder="Enter your product name here." required>
    <small id="emailHelp" class="form-text text-muted"> Product Name not more than 60 words.</small>
  </div>
  <div class="form-group">
    <label for="desce">Description</label>
    <input type="text" class="form-control" name="desce" id="desce" placeholder="Enter your some product details" required>
  </div>
  <div class="form-group">
    <label for="price">Product price</label>
    <input type="number" class="form-control" name="price" id="price" placeholder="Enter your product price for sell" required>
  </div>
  <div class="form-group">
    <label for="oprice">Offer Price</label>
    <input type="number" class="form-control" name="oprice" id="oprice" placeholder="Enter your offer Price if not than enter actual price" required>
  </div>


  <div class="form-group">
      <label for="inputState">Product Category</label>
      <select id="inputState" class="form-control" name = "pro">
        <option name ="pro" selected>Product Category</option>
        <option name = "pro">Book</option>
        <option name = "pro">Copy</option>
        <option name = "pro">Enginenring Books</option>
        <option name = "pro">Pencil</option>
        <option name = "pro">Colors</option>
      </select>
    </div>

    <div class="form-group">
      <label for="inputState1;">Quality</label>
      <select id="inputState1" class="form-control" name = "quality">
        <option name ="quality" selected>Product Quality</option>
        <option name = "quality">New Product</option>
        <option name = "quality">Old Product(Used Product)</option>
      </select>
    </div>



    <div class="form-group">
    <label for="image">Product Image 1</label>
    <input type="file" class="form-control" name="image" id="image"  required>
    <small id="emailHelp" class="form-text text-muted"> Upload a image of product from front.</small>
  </div>

  
<div class="form-group">
    <label for="image2">Product Image 2</label>
    <input type="file" class="form-control" name="image1" id="image1"  required>
    <small id="emailHelp" class="form-text text-muted"> Upload a image of product from backside.</small>
  </div>

  
<div class="form-group">
    <label for="image3">Product Image</label>
    <input type="file" class="form-control" name="image3" id="image3"  required>
    <small id="emailHelp" class="form-text text-muted"> Upload a image of product of your choice.</small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div
</center> -->


<!-- form ends here  -->





<!-- 
<div style="margin-top: 50px;"></div> -->


  <div class="container contact">
	<div class="row" style="border: 3px solid black;">
		<div class="col-md-3">
			<div class="contact-info">
				<!-- <img src="img/userlogo2.jpg" style="width: 70%; margin: auto;" alt="image"/> -->
				<h3><u>Upload Product Here</u></h3>
        <p align="justify" style="font-size: 17px;"><b>Try to upload image dimension(1024 , 768) for get better view of product. And If you upload any time of fake product then 
        we can cancel your selling licence<br><br><br>Enter real price for earn user trust and for selling more products.</b></p>
      
			</div>
		</div>
		<div class="col-md-9" style="border: 1px solid black;">
			<div class="contact-form">
				<div class="form-group">
				
				<form action="seller_working.php" method="POST" enctype="multipart/form-data">
				  <label class="control-label col-sm-2" for="gmail">Gmail ID:</label>
				  <div class="col-sm-10">          
					<input type="email" class="form-control" id="gmail" placeholder="Enter Gmail ID for security..." name="gmail">
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="product"> Name:</label>
				  <div class="col-sm-10">          
          <input type="text" class="form-control" id="product" placeholder="Enter Your Product Name..." name="product">
          <small id="emailHelp" class="form-text text-muted"> Product Name not more than 60 words.</small>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="price">Price:</label>
				  <div class="col-sm-10">
					<input type="number" class="form-control" id="price" placeholder="Enter product price..." name="price">
				  </div>
        </div>
        <div class="form-group">
				  <label class="control-label col-sm-2" for="oprice">Offer-Price:</label>
				  <div class="col-sm-10">
          <input type="number" class="form-control" id="oprice" placeholder="Enter discount price..." name="oprice">
          <small id="emailHelp" class="form-text text-muted"> If you have no discount on product than enter prodcut price.</small>
				  </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="oprice">Category:</label>
          <div class="col-sm-10">
          <select id="inputState" class="form-control" name = "pro">
            <option name ="pro" selected>Product Category</option>
            <option name = "pro">Book</option>
            <option name = "pro">Copy</option>
            <option name = "pro">Enginenring Books</option>
            <option name = "pro">Pencil</option>
            <option name = "pro">Colors</option>
          </select>
        </div>
        </div>
        
    <div class="form-group">
      <label class="control-label col-sm-2" for="inputState1;">Quality:</label>
      <div class="col-sm-10">
      <select id="inputState1" class="form-control" name = "quality">
        <option name ="quality" selected>Product Quality</option>
        <option name = "quality">New Product</option>
        <option name = "quality">Old Product(Used Product)</option>
      </select>
    </div>
  </div>
    

          <div class="form-group">
            <label class="control-label col-sm-2" for="desce">Description</label>
            <div class="col-sm-10">
            <textarea class="form-control" rows="5" id="desce" name="desce" placeholder="Enter your some product details" required></textarea>
          </div>
          </div>


  <div class="form-group">
    <label class="control-label col-sm-2" for="image">Image 1:</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" name="image" id="image"  required>
    <small id="emailHelp" class="form-text text-muted"> Upload a image of product from front.</small>
  </div>
  </div>

  
<div class="form-group">
    <label class="control-label col-sm-2" for="image2">Image 2:</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" name="image1" id="image1"  required>
    <small id="emailHelp" class="form-text text-muted"> Upload a image of product from backside.</small>
  </div>
  </div>

  
<div class="form-group">
    <label class="control-label col-sm-2" for="image3">Image 3:</label>
    <div class="col-sm-10">
    <input type="file" class="form-control" name="image3" id="image3"  required>
    <small id="emailHelp" class="form-text text-muted"> Upload a image of product of your choice.</small>
  </div>
</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
          
          <button type="submit" class="btn btn-primary" style="width: 80px;">Submit</button>
				  </div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>





<div style="margin-top: 1030px;"></div>






<h4 style="margin-left: 10px; margin-right: 10px;  border: 1px solid green; padding: 7px; background-color: burlywood; ">
  <a href="#"  onclick="func1();" style="color: black;">Click here for check or edit your product on studshop<small>
  .com</small></a><button type="button" class="close" data-dismiss="alert" aria-label="Close" style="display: none; border: 1px solid black;" id="but090" onclick="func2();">
    <span aria-hidden="true">&times;</span>
    </button></h4>
    <div style="display: none;" id="div143">
      <div class="card">
        <div class="card-header" style="background-color: gray; border: 1px solid black; margin-left: 10px; margin-right: 10px;">
          Product List
        </div>
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
  $name00 = $_SESSION['username'];
  $tit = 0;

  $sql = "SELECT * FROM `product` where usernames= '$name00'";
  $result = mysqli_query($conn , $sql);
  $roew = mysqli_num_rows($result);
  if($roew == 0){
    echo 'No prodouct found in shop';
  }
  else{
    while($nums = mysqli_fetch_assoc($result)){
      $tit_names = $nums['title'];
      $tit = $tit +1;
      $dts = $nums['dt'];
      $na = $nums['sno'];

      echo '
        <div class="card-body" style="border: 1px solid black; margin-left: 10px; margin-right: 10px;">
          <h5 class="card-title">'.$tit.' .) ' .$tit_names. '</h5>
          <p class="card-text">This product is upload in shop at '.$dts.' </p>
          <form action="seller_working.php" method="POST">
          <a href="seller_edit.php?snook='.$na.'" class="btn btn-primary">Edit</a>
          <a href="seller_edit.php?id='.$na.'" class="btn btn-primary" ';?>onclick="alert('Ok Seller Your Product is successfully remove from your shop.');"<?php echo'>Delete</a>
          </form>
        </div>
        <hr>
      ';
    }
  }
}


// // $namess = $_GET['sno'];
// $sql = "DELETE FROM `product` WHERE `product`.`title` = '$tit_names'";
// $result = mysqli_query($conn , $sql);
// if($result){
// $success = true;

// }
// else{
// $error = false;
//   // echo '<div style="margin-top: 55px; margin-bottom: -80px;"><div class="alert alert-warning alert-dismissible fade show" role="success" style=" border: 2px solid black;">
//   //       <strong>Error ! </strong>Some technical error. Please try again later.<small>.com</small>
//   //       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
//   //       <span aria-hidden="true">&times;</span>
//   //       </button>
//   //       </div></div>';
// }


?>
</div>

</div>

<!-- <br><br> -->
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
 echo '<div id="page-content" style="background-color: #007bff;">
 <div class="container text-center">
   <div class="row justify-content-center">
     <div class="col-md-7">
       <h1 class="font-weight-light mt-4 text-white"><a href="#" style="color: white; text-decoration: none; ">Studshop<small>.com</small></a></h1>
       <p class="lead text-white-50">Seller Workplace</p>
     </div>
   </div>
 </div>
</div>
<footer id="sticky-footer" class="py-4 bg-dark text-white-50">
 <div class="container text-center">
   <small>Copyright &copy; studshop.com</small>
 </div>
</footer>';
}

  ?>
  <!-- footer ends here  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>