<?php
session_start();
include("scripts/connect.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<title>Gaming News</title>
</head>
<div class="slogan">
	<h2>GAMING NEWS</h2>
	<center><p>Latest and greatest news updates for gamers</p></center>   
	<?php
	if(isset($_SESSION['username'])){
	   echo $_SESSION['username'];
	} 
	else{
	   echo "No session";
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
	<h3>Warzone Cheats</h3>
	<div class="search-container">
		<div class="search-box">
				<input class="search-text" id="search-item" type="text" placeholder="Search Specific Cheats or Creators" onkeyup="search()">
				<a class="search-btn" href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
		</div>
		</div>
<br><br><br>
	
	<p>Premium cheats</p>
   	<div class="gamecheat">
   		<div class="cheatcat">
   			<div class="cheatcard">
   				<div class="cheatcardcontent">
   						<img src="../assets/cheatcovers/newcheat.jpg">
   						<div hidden class="cheatcarddetails">
   						</div>
   				</div>
   			</div>

   			<div class="cheatcard">
   				<div class="cheatcardcontent">
   					
   				</div>
   			</div>

   			<div class="cheatcard">
   				<div class="cheatcardcontent">
   					
   				</div>
   			</div>
   		</div>
	</div>

	<p>Free cheats</p>
   	<div class="gamecheat">
   		<div class="cheatcat">

   		</div>
	</div>


</div>
    </body>
<footer>
	
</footer>
</html> 