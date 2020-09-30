<!DOCTYPE html>
<html lang="en">
<head>
<title>eForm - By One Shop Seva</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login/css/util.css">
	<link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	 <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="bg-wrap">
							<div class="row">
								<div class="col-md-6 d-flex align-items-center">
									<p class="mb-0 phone pl-md-2">
										<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +91 7790956989</a> 
										<a href="#"><span class="fa fa-envelope mr-1"></span> eform@oneshopseva.com</a>
									</p>
								</div>
								<div class="col-md-6 d-flex justify-content-md-end">
									<div class="social-media">
						    		<p class="mb-0 d-flex">
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
						    		</p>
					        </div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">

				<form action="login.php" method="post" class="login100-form validate-form">
					<div class="wrap-input100 rs1-wrap-input150 validate-input m-b-20" data-validate="Enter E-Mail ID">
			
						<input id="first-name" class="input100" type="mobile" name="mobile" placeholder="Enter Mobile">
						<span class="focus-input100"></span>
					</div>
<div class="container-login100-form-btn">
				<button type="submit" name="submit" class="login100-form-btn" onclick="phoneAuth();" onclick="show();">
							Login
						</button>
					</div>
</form>
					<div><a href="forget_password.php">Forget Password</a></div>

					<div style="margin-top: 4%;" class="container-login100-form-btn1" >
						<a href="Register/index.php" class="login100-form-btn1">New Agent Registration </a>
					</div>
					<div style="margin-top: 4%;" class="container-login100-form-btn1" >
						<a href="Register/index.php" class="login100-form-btn1">नये रजिस्ट्रेशन के लिए क्लिक करे (नि:शुल्क) </a>
					</div>

					<div style="margin-top: 4%;" class="container-login100-form-btn1 text-center" >
						<i>Copyright &copy; 2019 -  <script>document.write(new Date().getFullYear())</script> || ONE STOP SHOP - EMITRA &trade; 
						 <br> Marketed Through<big> <a href="https://oneshopseva.com/" target="_blank">ONE SHOP SEVA</a></big></i>
					</div>

					<div class="w-full text-center p-t-100"></div>

				</form>

				<div class="login100-more" style="background-image: url('login/images/bg-01.png');">
					<img class="heading" src="login/images/heading.png">
					<img class="writing" src="login/images/writing.jpg">
					<img class="online" src="login/images/online.png">
					<img class="wrong1" src="login/images/worng1.png">
					<img class="right" src="login/images/right.png">
				</div>
				
			</div>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/bootstrap/js/popper.js"></script>
	<script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="login/vendor/daterangepicker/moment.min.js"></script>
	<script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="login/js/main.js"></script>



</body>
</html>
