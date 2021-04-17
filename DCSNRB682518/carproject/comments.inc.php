<?php
//To insert comments on the database

function setComments($conn) {
	// to check if the comment submitt button has been pressed
	if (isset($_POST['commentSubmit'])) {
		$uid = $_POST['uid'];
		$date = $_POST['date'];
		$message = $_POST['message'];

		$sql="INSERT INTO comments(uid, Date, message) VALUES ('$uid', '$date', '$message')";
		$result = $conn->query($sql);
	}

}
//creating a new function to display comments from the database
function getComments($conn){
	$sql = "SELECT * FROM comments ORDER BY date DESC " ;
	//creating of another varriable with a querry method to fetch results
	$result = $conn->query($sql);
	// using the while loop to spit all the comments
	while ($row = $result-> fetch_assoc()){
		echo "<div class='comment_box'><p>";
			//echo $row['uid']."<br>";
			echo nl2br($row['message'])."<br><br><br><br>";
			//nl2br function converts the spaces from the db
			echo $row['date'];
		echo "</p> </div>";
	}
	

}




