<?php 

 session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  } 
	include_once'dbh.inc.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title>Carlisting</title>
	<link rel="stylesheet" type="text/css" href="css/car-listing.css">
	<link rel="stylesheet" type="text/css" href="css/book.css">
	<ul>
		<li><a href="welcome.php">Home</a></li>
		<li><a href="">Aston Martins</a></li>
		<li><a href="">Audi</a></li>
		<li><a href="">Chevrolet</a></li>
		<li><a href="">Ferrari</a></li>
		<li><a href="">Lamborghini</a></li>
		<li><a href="">Toyota</a>
			<ul>
				<li><a href="">Lexus</a></li>
				<li><a href="">Harrier</a></li>
				<li><a href="">Hilux</a></li>
				<li><a href="">Wish</a></li>
				<li><a href="">Probox</a></li>
			</ul>
		</li>
		<li><a href="index.php">Booking</a></li>
		<li><a href="comment.php">Comments</a></li>
	</ul>
</head>
	<body style="background: url(images/listing.jpg); background-attachment: fixed;  background-size: 100%">
		<table>
							<?php
							$sql = "SELECT * FROM cars order by price DESC ";
							$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result)>0 ) {
								$i =0;
							while($row = mysqli_fetch_array($result)) {
								if ($i%3 == 0) {
									echo "<tr>";
							}
							echo "<div class='maindiv'>";
								echo "<td><img src='mainproject/images/{$row['image']}' alt='{$row['name']}'  class='displays' </td>";
								if ($i%3==2) {
									echo "</tr>";
								}
								$i++;
					
								}
							echo "</div>";

			


			?>



		</table>



	</body>

</html>
<?php 
} ?>