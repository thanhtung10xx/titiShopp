
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
<h1 class="w3ls">TiTi Shop Signup </h1>
<div class="content-w3ls">
	<div class="content-agile1">
		<h2 class="agileits1">TITI SHOP</h2>
		<p class="agileits2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
	</div>
	<div class="content-agile2">
		<form action="#"method = "post" enctype="multipart/form-data">
			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="firstname" placeholder=" First Name" title="Please enter your First Name" required="">
			</div>

			<div class="form-control w3layouts"> 
				<input type="text" id="firstname" name="lastname" placeholder=" Last Name" title="Please enter your Last Name" required="">
			</div>

			<div class="form-control w3layouts">	
				<input type="email" id="email" name="email" placeholder="mail@example.com" title="Please enter a valid email" required="">
			</div>

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
			</div>	

			<div class="form-control agileinfo">	
				<input type="password" class="lock" name="confirm-password" placeholder="Confirm Password" id="password2" required="">
			</div>			
			<input type="submit" class="register" name="register" value="Register">
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
		<p class="wthree w3l">have an account? <a href="">Login here</a></p>
		
	</div>
	<div class="clear"></div>
</div>
<p class="copyright w3l">© 2021 TITI SHOP. All Rights Reserved | Design by <a href="" target="_blank">Thanh Tùng</a></p>
</body>
</html>
<?php
include("connect.php");
if (isset($_POST['register'])) { 
$file =$_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
$path = "Avartar/";
move_uploaded_file($file_tmp,$path.$file);
$username = $_POST['email'];
$password = $_POST['password'];
$lastname=$_POST['lastname'];
$firstname=$_POST['firstname'];
$sql="insert into titishop values ('','$username','$password','','$firstname',' $lastname','$file')";
$result = mysqli_query($connect,$sql);
if ($result) {
  echo "<script>alert('Account has been created successfully!')</script>";
  echo "<script>window.open('login.php','_self')</script>";
}
else{
  echo"<script>alert('Error')</script>";
}  
}
?>