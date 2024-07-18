<?php
session_start();
include("scripts/connect.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="data/gameCatalogData.js" defer></script>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<title>Gaming News | Catalogue</title>
</head>
 <body>
	
 	<div class="slogan">
         <h2>GAMING NEWS</h2>
         <center><p>Latest and greatest news updates for gamers</p></center>   
		 <?php
		 if(isset($_SESSION['username'])){
			echo $_SESSION['username'];
		 } 
		 else{
			echo "No session (Testing)";
		 }
	
		 ?>
   	</div>
	   <header>
		<div class="header">
		<nav>
			<img src="assets/GC_LOGO.png" alt="">
				<ul>
					<li><a class="selected" href="index.php"><i class="fa-solid fa-gamepad"></i> Games</a></li>
					<?php
					 if(isset($_SESSION['username'])){
						echo "<li><a href='scripts/logout.php'><i class='fa-solid fa-right-to-bracket'></i> Logout</a></li>";
					 } 
					 else{
						echo "<li><a href='login.php'><i class='fa-solid fa-right-to-bracket'></i> Login</a></li>";
					 }
					 ?>
					<li><a href="settings.php"><i class="fa fa-gear"></i> Settings</a></li>
					<li><a href="settings.php"><i class="fa-solid fa-question"></i> About</a></li>
				</ul>
			</nav>
		</div>
	</header>
<div class="wrapper">
   	<h3>Game Titles</h3>
	   <div class="search-container">
		<div class="search-box">
				<input class="search-text" id="search-item" type="text" placeholder="Search Titles" onkeyup="search()">
				<a class="search-btn" href="#" onclick="search()"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
		</div>
		</div>

   <div class="game-categories" id="game-categories">

   </div>
</div>

<div class="tos hide">
	<div class="tos-info">
		<h1>Terms Of Service & Cookies</h1>
		<p>Hi there! As a valuable member of our community, we value your privacy and welcome you with open arms to having a look at our terms of service <a href="#">here</a>. 
		We also encourage the use of cookies to enhance your experience, however you can choose to accept or decline this invitation.</p>
	</div>
	<div class="tos-buttons">
		<button class="acceptBtn" id="acceptBtn">Accept</button>
		<button class="declineBtn" id="declineBtn">Decline</button>
	</div>
</div>
<footer>
	<div class="footerwrapper">
		<H1>THIS IS THE FOOTER</H1>
	</div>

</footer>
<script type="text/javascript" src="scripts/cookieHandler.js"></script>
    </body>
</html> 