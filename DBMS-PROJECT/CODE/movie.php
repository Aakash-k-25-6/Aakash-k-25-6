<?php
 include_once 'header.php';
 $conn=mysqli_connect('localhost','root','','movie');
 $a = $_GET["id"];
 $query="select * from movies where movieId = $a";
 $result= mysqli_query($conn,$query);
 while ($row= mysqli_fetch_array($result)){?>

<section>
	<div class ="div">
		<div class="movimg">
			<img src="<?php echo $row['image'];?>">
		</div>
		<div class="movname">
			<h1><?php echo"".$row["movieName"]."" ?></h1>
		</div>
		<div class="movplot">
			<h1><?php echo"".$row["plot"]."" ?></h1>
		</div>
		<div class="movcat">
			<h1><?php echo"".$row["category"]."" ?></h1>
		</div>
	<div class="movcast">
		<h1> <?php echo"".$row["cast1"]."" ?></h1>
		<h1> <?php echo"".$row["cast2"]."" ?></h1>
		<h1> <?php echo"".$row["cast3"]."" ?></h1>
		<h1> <?php echo"".$row["cast4"]."" ?></h1>
	</div>
	</div>
</section>
<?php }
?>
<?php
  include_once 'footer.php';
?>