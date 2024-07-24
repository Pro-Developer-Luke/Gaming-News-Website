<?php
require("php/accHandler.php")

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<script src="js/functions.js"></script>
	<title>Gaming News | Login</title> 
</head>
 <body style="background: linear-gradient(to right, #d97757, #ed6e9f);
 background-attachment: fixed;
 --primaryColor: #d97757;
 --SecondaryColor: #ed6e9f;">
	<header>
		<div class="header">
		<nav>
		<a href="index.php"><img src="assets/GC_LOGO.png" alt=""></a>
				<ul>
					<li><a href="index.php"><i class="fa-solid fa-gamepad"></i> Games</a></li>
					<?php
					 if(isset($_SESSION['username'])){
						echo "<li><a href='php/logout.php'><i class='fa-solid fa-right-to-bracket'></i> Logout</a></li>";
					 } 
					 else{
						echo "<li><a class='selected' href='login.php'><i class='fa-solid fa-right-to-bracket'></i> Login</a></li>";
					 }
					 ?>
					<li><a href="settings.php"><i class="fa fa-gear"></i> Settings</a></li>
					<li><a href="settings.php"><i class="fa-solid fa-question"></i> About</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="loginwrapper">
<div class="logincontainer">
	<form action="php/accHandler.php" method="post" id="formLogin">
		<h2 class="formTitle">Sign In</h2>
		<?php 
	$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullUrl, "error=nouser") == true){
		echo "<p class='formMessage formMessage--error'>User not found.</p>";
	}
	?>
		<div class="formInputGroup">
			<input type="email" class="formInput" name="email" id="loginEmail" autofocus placeholder="Email" required>
		</div>
		<div class="formInputGroup">
			<input type="password" class="formInput" name="password" id="password" autofocus placeholder="Password" required>
		</div>
		<div class="hidePasswordBtn">
		<a><i onclick="togglePass()" class="fa-solid fa-eye-slash" id="eyeIcon"></i></a>
		</div>
		<button class="formSubmit" type="submit" name="signInBtn">Sign in</button>
		<p class="formText">
			<a href="passwordreset.php" onclick="logintoggle('pwreset');" class="formLink" id="forgotPasswordLink">Forgotten your password?</a>
		</p>
		<p class="formText">
			<a href="register.php" class="formLink" id="signUpLink">Don't have an account? Sign up</a>
		</p>
	</form>


</div> 	
</div>
    </body>
</html> 