<?php
session_start();
include("php/connect.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/gameCatalogData.js" defer></script>
	
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
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
			<a href="index.php"><img src="assets/GC_LOGO.png" alt=""></a>
				<ul>
					<li><a class="selected" href="index.php"><i class="fa-solid fa-gamepad"></i> Games</a></li>
					<?php
					 if(isset($_SESSION['username'])){
						echo "<li><a href='php/logout.php'><i class='fa-solid fa-right-to-bracket'></i> Logout</a></li>";
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
   	<h3 class="pageTitle">Game Titles</h3>
	   <div class="search-container">
		<div class="search-box">
				<input class="search-text" id="search-item" type="text" placeholder="Search Titles" onkeyup="search()">
				<a class="search-btn" href="#" onclick="search()"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
		</div>
		</div>

   <div class="game-categories" id="game-categories">

   </div>
</div>
<br><br><br>
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
		<div class="footerCol">
			<h1 class="footerTitle">NEWS</h1>
			<div class="divider-container">
				<div class="divider"></div>
			</div>
			<ul>
				<li><a href="#">Latest news articles</a></li>
				<li><a href="#">Community forums</a></li>
                <li><a href="#">Popular games</a></li>
                <li><a href="#">Game reviews</a></li>
            </ul>	 
		</div>

		<div class="footerCol">
            <h1 class="footerTitle">ABOUT</h1>
			<div class="divider-container">
				<div class="divider"></div>
			</div>
            <ul>
				<li><a href="#">Contact us</a></li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Careers</a></li>
                <li><a href="#">Press</a></li> 
            </ul>     
        </div>
		
        <div class="footerCol">
            <h1 class="footerTitle">FOLLOW US</h1>
			<div class="divider-container">
				<div class="divider"></div>
			</div>
            <ul>
				<li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                <li><a href="#"><i class="fab fa-facebook-square"></i> Facebook</a></li>                
                <li><a href="#"><i class="fab fa-youtube"></i> YouTube</a></li>
				<li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>    
            </ul>    
        </div>

		<div class="footerCol">
            <h1 class="footerTitle">SUPPORT</h1>
			<div class="divider-container">
				<div class="divider"></div>
			</div>
            <ul>
				<li><a href="#">Terms of Service</a></li>
                <li><a href="#">Help & Support</a></li>
                <li><a href="#">Report a bug</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>    
        </div>
	</div>

</footer>
<script type="text/javascript" src="js/cookieHandler.js"></script>
    </body>
</html> 