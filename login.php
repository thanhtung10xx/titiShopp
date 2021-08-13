<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>TITI SHOP | SIGNUP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
</head>
<body>
<h1 class="w3ls">TiTi Shop Login </h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">TITI SHOP</h2>
		<p class="agileits2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<div style="margin-top: 80px;" class="content-agile2">
		<form action="#" method="post">

			<div class="form-control w3layouts">	
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
			</div>	
		
			<input name="login" type="submit" class="register" value="LOGIN">
		</form>
		<script type="text/javascript">
			window.onload = function () {
				document.getElementById("password1").onchange = validatePassword;
				document.getElementById("password2").onchange = validatePassword;
			}
			function validatePassword(){
				var pass2=document.getElementById("password2").value;
				var pass1=document.getElementById("password1").value;
				if(pass1!=pass2)
					document.getElementById("password2").setCustomValidity("Passwords Don't Match");
				else
					document.getElementById("password2").setCustomValidity('');	 
					//empty string means no validation error
			}
		</script>
		<p class="wthree w3l">Do not have an account? <a href="signup.php">kick here</a></p>
		<p class="wthree w3l">or login with</p>
        <ul class="social-agileinfo wthree2">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-youtube"></i></a></li>
			<li><a href="#"><i class="fa fa-twitter"></i></a></li>
			<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	</div>
	<div class="clear"></div>
</div>
<p class="copyright w3l">© 2021 TITI SHOP. All Rights Reserved | Design by 
<a href="" target="_blank">Thanh Tùng</a></p>

</body>
</html>

<?php 
  session_start();
  include("connect.php");
  if(isset($_POST['login'])){

    $username = $_POST['email'];
    $password = $_POST['password'];
    $sql="select * from titishop where userName='$username' AND passWord='$password'";
    $result = mysqli_query($connect,$sql);
    $check_login = mysqli_num_rows($result);
    $row_login = mysqli_fetch_array($result);
	$sql2 = "select * from titishop where userName='$username' AND passWord='$password' AND phanQuyen = 'admin'";
	$result2 = mysqli_query($connect, $sql2);
	$check_phanQuyen = mysqli_num_rows($result2);
    if($check_login == 0){
     echo "<script>alert('Password or username is incorrect, please try again!')</script>";
     exit();
   }  
   if($check_login > 0 && $check_phanQuyen > 0 ){  
    echo "<script>alert('You have logged in successfully !')</script>";  
    echo"<script>window.open('admin/admin.php','_self')</script>";
	$_SESSION['firstName'] = $row_login['firstName']; 
  }
  if($check_login > 0 && $check_phanQuyen == 0 ){  
    echo "<script>alert('You have logged in successfully !')</script>";  
    echo"<script>window.open('home.php','_self')</script>";
	$_SESSION['firstName'] = $row_login['firstName']; 
  }
}
?>