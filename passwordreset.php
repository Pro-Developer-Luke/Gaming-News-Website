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
	
	
	<title>GameCheats</title> 
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
					<li><a  href="index.php"><i class="fa-solid fa-house"></i>Home</a></li>
					<li><a href="logout.php"><i class="fa-solid fa-right-to-bracket"></i>Logout</a></li>
					<li><a class="selected" href="login.php"><i class="fa-solid fa-right-to-bracket"></i>Login</a></li>
					<li><a href="settings.php"><i class="fa fa-gear"></i>Settings</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="loginwrapper">
<div class="logincontainer">
	</form>
	<form method="post" id="formPassReset">
		<h2 class="formTitle">Password Reset</h2>
	<div class="formMessage formMessage--error"><i>Email Does Not Exist...</i></div>
		<div class="formInputGroup">
			<input type="text" class="formInput" name="loginEmail" id="loginEmail" autofocus placeholder="Email">
			<div class="formInputErrorMessage"></div>
		</div>
		<button class="formSubmit" type="submit">Reset password</button>
		<p class="formText">
			<a href="login.php" class="formLink" id="signUpLink">Back to login</a>
		</p>
	</form>
	
</div> 	
</div>
    </body>
<script src="scripts/loginManagement.js"></script>
</html> 