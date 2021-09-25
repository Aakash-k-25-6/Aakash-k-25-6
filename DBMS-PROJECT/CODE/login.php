<?php
  include_once 'header.php';
?>

<section> 
 <div class="login">
 <div class="form"> 
 <h2 class="sub_head">Login</h2>
 
 <form action="includes/login.inc.php" class="reg" method="post">
 	<input type="text" name="uid" placeholder="Username / Email">
 	<input type="password" name="pwd" placeholder="password">
 	<button type="submit" name="submit">Login</button>
 </form>
 <?php
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p>fill in all fields!<p>";
		}

		else if($_GET["error"] == "wronglogin"){
			echo "<p>userid or email doesn't exist!<p>";
		}

		else if($_GET["error"] == "incorrectpwd"){
			echo "<p>incorrect password!<p>";
		}

		
	}
?>
 </div>
 </div>
</section>

<?php
  include_once 'footer.php';
?>