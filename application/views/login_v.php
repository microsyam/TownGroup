<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login | <?php echo $logo[0]['s_name'];?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>loginv/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>loginv/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>loginv/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>loginv/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>loginv/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>loginv/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>loginv/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>loginv/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url().'images/'.$logo[0]['s_logo'];?>" alt="IMG">
				</div>

				
				<?php $data=array('class'=>'login100-form validate-form');?>
				<?php echo form_open('Verifylogin',$data);?>
					<span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Email is required">
						<input class="input100" type="text" name="username" id="username" placeholder="Email" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" id="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
				<input type="checkbox"  value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
					<div class="container-login100-form-btn">
						<button onclick="lsRememberMe()" class="login100-form-btn">
							Login
						</button>
					</div>
					<?php echo form_close();?>
				
			</div>
		</div>
	</div>

	<script>
		const rmCheck = document.getElementById("rememberMe"),
			emailInput = document.getElementById("username");
			passwordInput = document.getElementById("password");

		if (localStorage.checkbox && localStorage.checkbox !== "") {
			rmCheck.setAttribute("checked", "checked");
			emailInput.value = localStorage.username;
			passwordInput.value = localStorage.password;
		} else {
			rmCheck.removeAttribute("checked");
			emailInput.value = "";
			passwordInput.value = "";
		}

		function lsRememberMe() {
			if (rmCheck.checked && emailInput.value !== "") {
				localStorage.username = emailInput.value;
				localStorage.password = passwordInput.value;
				localStorage.checkbox = rmCheck.value;
			} else {
				localStorage.username = "";
				localStorage.password = "";
				localStorage.checkbox = "";
			}
		}
	</script>
<!--===============================================================================================-->	
	<script src="<?php echo base_url();?>loginv/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>loginv/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>loginv/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>loginv/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>loginv/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>loginv/js/main.js"></script>

</body>
</html>
