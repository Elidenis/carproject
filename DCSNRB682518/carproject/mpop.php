<?php 

include_once'dbh.inc.php';

$messages ="SELECT * FROM contact";
$out = mysqli_query($conn, $messages);

if (mysqli_num_rows($out) > 0  ) {
	while ( $row=mysqli_fetch_array($out) ) {
		echo "<div class='comment_box'><p>";
            echo $row['name']."<br>";
            echo nl2br($row['message'])."<br><br><br><br>";
            //nl2br function converts the spaces from the db
            echo $row['email'];
        echo "</p> </div>";
		


			}
} 






 ?>