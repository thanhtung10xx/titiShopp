<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TITI SHOP</title>
	<!-- Import Boostrap css, js, font awesome here -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">       
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link href="./css/styleIndex.css" rel="stylesheet">
</head>
<body>
<?php session_start(); ?>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
	<div class="container">
		<a class="navbar-brand" href="#"><img style="width:70px; height: 70px;" src="./images/logo.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
  
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php"> Home <span class="glyphicon glyphicon-home sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php"> <span class="glyphicon glyphicon-user"></span>Stream</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown">
                                Account
                            </a>
                            <div class="dropdown-content">
                                <?php if(!isset($_SESSION['firstName'])) echo "<a class='dropdown-item' href='login.php'>Sign In</a>"
                               ?>
                                <?php if(!isset($_SESSION['firstName'])) echo "<a class='dropdown-item' href='dangky.php'>Sign Up</a>" 
								?> 
                                <div class="dropdown-divider"></div>
                                <?php if(isset($_SESSION['firstName'])) echo "<a class='dropdown-item' href='account.php'>My account</a>" 
                                ?>
                                <?php if(isset($_SESSION['firstName'])) echo"<a class='dropdown-item' href='logout.php' id='navbarDropdown'>
                                Log Out</a>"  
								?>
                            </div>
                        </li>

                    </ul>
			
			<form class="form-inline my-2 my-lg-0">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
			</form>

		</div>
	</div>
  </nav>
<!-- slide -->
<div id="slides" class="carousel slide" data-ride="carousel">
	<ul class="carousel-indicators">
		<li data-target="#slides" data-slide-to="0" class="active"></li>
		<li data-target="#slides" data-slide-to="1"></li>
		<li data-target="#slides" data-slide-to="2"></li>		
		<li data-target="#slides" data-slide-to="3"></li>
	</ul>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="./images/sl1.jpg">
			 <!-- <div class="carousel-caption">
				<h1 class="display-2">Example</h1>
				<h3>Autolayout with titi shop</h3>
				<button type="button" class="btn btn-outline-light btn-lg">
					VIEW PRODUCT
				</button>
				<button type="button" class="btn btn-primary btn-lg">BUY NOW</button>
			</div>  -->
		</div>
		<div class="carousel-item">
			<img src="./images/sl2.jpg">
			 <!-- <div class="carousel-caption">
				<h1 class="display-2">Example</h1>
				<h3>Autolayout with titi shop</h3>
				<button type="button" class="btn btn-outline-light btn-lg">
					VIEW PRODUCT
				</button>
				<button type="button" class="btn btn-primary btn-lg">BUY NOW</button>
			</div>  -->
		</div>
		<div class="carousel-item">
			<img src="./images/sl3.jpg">
			 <!-- <div class="carousel-caption">
				<h1 class="display-2">Example</h1>
				<h3>Autolayout with titi shop</h3>
				<button type="button" class="btn btn-outline-light btn-lg">
					VIEW PRODUCT
				</button>
				<button type="button" class="btn btn-primary btn-lg">BUY NOW</button>
			</div>  -->
		</div>
		<div class="carousel-item">
			<img src="./images/sl4.jpg">
			 <!-- <div class="carousel-caption">
				<h1 class="display-2">Example</h1>
				<h3>Autolayout with titi shop</h3>
				<button type="button" class="btn btn-outline-light btn-lg">
					VIEW PRODUCT
				</button>
				<button type="button" class="btn btn-primary btn-lg">BUY NOW</button>
			</div>  -->
		</div>
	</div>
</div>
<!-- BÁN CHẠY product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">New Product</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
			<div class="row">
			<?php
                include("connect.php");
                if (!$connect){
                  echo "ket noi that bai";
                  }
                  $sql ="select * from sanpham";
                    $query=mysqli_query($connect,"select * from sanpham");
                    while($row_pro=mysqli_fetch_array($query)){
                    $idSP= $row_pro['idSP'];
                    $tenSP = $row_pro['tenSP'];
                    $giaSP = $row_pro['giaSP'];
                    $anhSP = $row_pro['anhSP'];
                    $moTaSP = $row_pro['moTaSP'];
                    echo"
                    <div class='col-md-3 col-sm-6 col-12'>
                      <div class='card card-product mb-3'>
                            <img src='images/$anhSP' width='250' height='250' alt='Hinh Anh'/>
                            <div class='card-body'>
                                <h5 class='card-title'>$tenSP</h5>
                                <p style='color: red'><b>Price: $giaSP </b>$</p>
                                   <div align='center'>
                                     <a href='detail.php?id=$idSP'><button class='btn btn-dark' ; style='float: left;'>Details</button></a>
                                   </div>
                            </div>
                      </div>
                    </div>
                    ";
                  }
                ?>			
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">Product</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
			<div class="row">
			<?php
                include("connect.php");
                if (!$connect){
                  echo "ket noi that bai";
                  }
                  $sql ="select * from sanpham";
                    $query=mysqli_query($connect,"select * from sanpham");
                    while($row_pro=mysqli_fetch_array($query)){
                    $idSP= $row_pro['idSP'];
                    $tenSP = $row_pro['tenSP'];
                    $giaSP = $row_pro['giaSP'];
                    $anhSP = $row_pro['anhSP'];
                    $moTaSP = $row_pro['moTaSP'];
                    echo"
                    <div class='col-md-3 col-sm-6 col-12'>
                      <div class='card card-product mb-3'>
                            <img src='images/$anhSP' width='250' height='250' alt='Hinh Anh'/>
                            <div class='card-body'>
                                <h5 class='card-title'>$tenSP</h5>
                                <p style='color: red'><b>Price: $giaSP </b>$</p>
                                   <div align='center'>
                                     <a href='detail.php?id=$idSP'><button class='btn btn-dark' ; style='float: left;'>Details</button></a>
                                   </div>
                            </div>
                      </div>
                    </div>
                    ";
                  }
                ?>			
			</div>
		</div>
	</div>
</div>
<hr class="light">
<div class="container-fluid padding">	
	<div class="row text-center padding">
		<div class="col-12">
			<h2>Contact us</h2>
		</div>
		<div class="col-12 social padding">
			<a href="https://www.facebook.com/thanhtung10x/"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus-g"></i></a>
			<a href="https://www.instagram.com/im_thanhtung.01/"><i class="fab fa-instagram"></i></a>
			<a href="https://www.youtube.com/channel/UCo27JH0nQjvPfJA6VNGo6-A"><i class="fab fa-youtube"></i></a>
		</div>
	</div>
</div>	

<footer>
	<div class="container-fluid padding">	
		<div class="row text-center">
			<div class="col-md-4">
				<img style="width:70px; height: 70px;" src="./images/logo.png">
				<hr class="light">
				<p>098.198.2001</p>
				<p>thanhtung10xx@gmail.com</p>
				<p>Bach Mai street, Hanoi, Vietnam</p>
			</div>
			<div class="col-md-4">				
				<hr class="light">
				<h5>Working hours</h5>
				<hr class="light">
				<p>Monday-Friday: 8am - 5pm</p>
				<p>Weekend: 8am - 12am</p>
			</div>
			<div class="col-md-4">				
				<hr class="light">
				<h5>Services</h5>
				<hr class="light">
				<p>Outsourcing</p>
				<p>Website development</p>
				<p>Mobile applications</p>
			</div>
			<div class="col-12">
				<hr class="light-100">
				<h5>&copy; 2021 TITI SHOP. All Rights Reserved | Design by <a href="" target="_blank">Thanh Tùng</a></h5>
			</div>
		</div>
	</div>
</footer>
</body>
</html>	