<?php
include_once 'dbh.inc.php';





?>



<!DOCTYPE html>
<html>
<head>
	<title>Top priced cars</title>
	<link rel="stylesheet" type="text/css" href="css/comment-nav.css">
	<link rel="stylesheet" type="text/css" href="css/book.css">
</head>
<body>
	<div>
		<ul>
			<li><a href="welcome.php">Home</a></li>
			<li><a href="moderateprice.php">Moderate priced</a></li>
			<li><a href="contuct.php">Message</a></li>
			<li><a href="carlisting.php">Car listing</a></li>
			<li><a href="index.php">Booking</a></li>
		</ul>
	</div>

<table>
		<?php
					$sql = "SELECT * FROM cars order by price DESC limit 6 ";
					$result = mysqli_query($conn, $sql);
							if (mysqli_num_rows($result)>0 ) {
								$i =0;
									while($row = mysqli_fetch_array($result)) {
									 if ($i%3 == 0) {
									echo "<tr>";
							}
								echo "<div class='maindiv'>";
								echo "<td><img src='mainproject/images/{$row['image']}' alt='{$row['name']}'  class='displays' </td>";
								echo $row["name"]."<br>"; 
								echo $row["price"];
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
<?php } ?>