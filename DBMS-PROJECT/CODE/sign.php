<?php
  include_once 'header.php';
?>

<section> 
 <div class="login">
 <div class="form"> 
 <h2 class="sub_head">Sign up</h2>
 
 <form action="includes/sign.inc.php" class="reg" method="post">
 	<input type="text" name="name" placeholder="First name">
 	<input type="text" name="email" placeholder="Email">
 	<input type="text" name="uid" placeholder="Username">
 	<input type="password" name="pwd" placeholder="password">
 	<input type="password" name="cnpwd" placeholder="Confirm password">
 	<button type="submit" name="submit">sign up</button>
 </form>
 <?php
	if(isset($_GET["error"])){
		if($_GET["error"] == "emptyinput"){
			echo "<p>fill in all feilds!<p>";
		}

		else if($_GET["error"] == "invaliduid"){
			echo "<p>choose a proper username!<p>";
		}

		else if($_GET["error"] == "invaliduid"){
			echo "<p>choose a proper username!<p>";
		}

		else if($_GET["error"] == "invalidemail"){
			echo "<p>choose a proper email!<p>";
		}
		
		else if($_GET["error"] == "passwordsnotmatch"){
			echo "<p>passwords doesn't match!<p>";
		}

		else if($_GET["error"] == "usernametaken"){
			echo "<p>username alread exist!<p>";
		}
		
		else if($_GET["error"] == "stmtfailed"){
			echo "<p>something went wrong, try again!<p>";
		}

		else if($_GET["error"] == "signupsuccess"){
			echo "<p>you have signed up!<p>";
		}

		
	}
?>
 
 </div>
 </div>
 
</section>


<?php
  include_once 'footer.php';
?>