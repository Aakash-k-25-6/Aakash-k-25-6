<?php
include_once 'header.php';
$conn=mysqli_connect('localhost','root','','movie');
$query="select * from users where usersUid='".$_SESSION["useruid"]."'";
$result= mysqli_query($conn,$query);
while ($row= mysqli_fetch_array($result)){?>
	<h1> Profile Details </h1>
	<br>
	<div class="promain"align="center">
	<img src="<?php echo $row['image'];?>"/>
	<h2> <?php echo "".$row["usersEmail"]."<br>".$row["usersName"]."<br>".$row["usersUid"]."<br>".$row["usersId"]."";?> </h2>;
	</div>
<?php }
?>
<?php
include_once 'footer.php';
?>

