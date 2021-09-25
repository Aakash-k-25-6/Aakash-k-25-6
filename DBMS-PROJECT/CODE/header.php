<?php
	session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css"/>
<head>
<title>Homepage</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>


<body>



<header>
  <h2>SeriesFreak</h2>
  <img src="https://png.pngtree.com/element_our/png/20181227/movie-icon-which-is-designed-for-all-application-purpose-new-png_287896.jpg"/>
<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a  href="movies.php">Movies</a>
  <a href="series.php">Series</a>
  <a href="favourites.php">Favourite</a>
  <div class="topnav-right">
    <?php
  		if (isset($_SESSION["useruid"])) {
  			echo "<a href='profile.php'>Profile</a>";
  			echo "<a href='includes/logout.inc.php'>Logout</a>";
  		}
  		else{
  			echo "<a href='login.php'>Log in</a>";
  			echo "<a href='sign.php'>Register</a>";
  		}
  	?>
  </div>
</div>
</header>
