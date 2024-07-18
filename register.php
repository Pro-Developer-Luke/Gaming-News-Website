<?php
require("scripts/accHandler.php")

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<script src="scripts/togglepass.js"></script>
	
	
	<title>Gaming News | Register</title> 
</head>
 <body style="background: linear-gradient(to right, #d97757, #ed6e9f);
 background-attachment: fixed;
 --primaryColor: #d97757;
 --SecondaryColor: #ed6e9f;">
	<header>
		<div class="header">
		<nav>
			<img src="assets/GC_LOGO.png" alt="">
				<ul>
				<li><a href="index.php"><i class="fa-solid fa-gamepad"></i> Games</a></li>
				<li><a href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Login</a></li>
				<li><a href="settings.php"><i class="fa fa-gear"></i>Settings</a></li>
				<li><a href="settings.php"><i class="fa-solid fa-question"></i> About</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="loginwrapper">
<div class="logincontainer">
	<form action="scripts/accHandler.php" method="post" id="formSignup">
		<h2 class="formTitle">Sign Up</h2>
		<?php 
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullUrl, "error=userexists") == true){
		echo "<p class='formMessage formMessage--error'>Sorry, that username is already taken.</p>";
	}
	
	if(strpos($fullUrl, "error=emailexists") == true){
		echo "<p class='formMessage formMessage--error'>That email is associated with an existing account. <a style='color: rgb(170, 6, 0);' href='login.php'>Click to sign in</a>.</p>";
	}

	if(strpos($fullUrl, "error=confirmpassword") == true){
		echo "<p class='formMessage formMessage--error'>Passwords did not match.</p>";
	}

	?>
		<div class="formInputGroup">
			<input type="text" name="username" id="signupUserName" class="formInput" autofocus placeholder="Username" required>
			<div class="formInputErrorMessage"></div>
		</div>
		<div class="formInputGroup">
			<input type="text" id="email" name="email" class="formInput" autofocus placeholder="Email" required>
			<div class="formInputErrorMessage"></div>
		</div>
		<div class="formInputGroup">
			<input type="password" name="password" id="password" class="formInput" autofocus placeholder="Password" required>
			<div class="formInputErrorMessage"></div>
		</div>
		<div class="formInputGroup">
			<input type="password" name="confirm_password" id="confirm_password" class="formInput" autofocus placeholder="Confirm password" required>
			<div class="formInputErrorMessage"></div>
		</div>
		<div class="hidePasswordBtn">
		<a><i onclick="togglePass()" class="fa-solid fa-eye-slash" id="eyeIcon"></i></a>
		</div>
		<button class="formSubmit" type="submit" name="signUpBtn">Sign up</button>
		<p class="formText">
			<a class="formLink" href="login.php" id="loginLink">Already have an account? Login</a>
		</p>
	</form>
	
</div> 	
</div>
    </body>
</html> 