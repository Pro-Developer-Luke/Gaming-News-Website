<?php
session_start();
include("php/connect.php")
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Gemunu+Libre:wght@800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<script type="text/javascript" src="js/functions.js"></script>

	<title>Gaming News</title>

	<script>

		function getQueryParams() 
		{
            let params = {};
            let queryString = window.location.search.substring(1);
            let queryArray = queryString.split('&');
            for (let i = 0; i < queryArray.length; i++) {
                let pair = queryArray[i].split('=');
                params[pair[0]] = decodeURIComponent(pair[1]);
            }
            return params;
        }

		function displayTitle() {
            let params = getQueryParams();
            let title = params.title; // Get the 'title' parameter
            let titleElement = document.getElementById('dynamic-title');

            if (title) {
                titleElement.textContent = title; // Update the content of the <h3> tag
            } else {
                titleElement.textContent = 'Default Title'; // Default title if no parameter is provided
            }
        }
		

		window.onload = displayTitle;
	</script>
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
	<h3 class="pageTitle" id="dynamic-title">Warzone</h3>
	<div class="search-container">
		<div class="search-box">
				<input class="search-text" id="search-item" type="text" placeholder="Search Specific Articles or Authors" onkeyup="search()">
				<a class="search-btn" href="#"><i class="fa-sharp fa-solid fa-magnifying-glass"></i></a>
		</div>
	</div>

</div>
    </body>
<footer>
	
</footer>
</html> 