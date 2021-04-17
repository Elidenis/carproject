<?php 
   
  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}


 	date_default_timezone_set('Africa/Nairobi');
	include 'dbh.inc.php';
	include 'comments.inc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Comment page</title>
	<link rel="stylesheet" type="text/css" href="css/comment-nav.css">
</head>
<body  style="background: url(images/comment.jpg);background-attachment: fixed; background-size: 100%">


	<ul>
		<li><a href="welcome.php">Home</a></li>
		<li><a href="contuct.php">Contact us</a></li>
		<li><a href="carlisting.php">Cars</a></li>
		<li><a href="">Services</a></li>
		<li><a href="">Maps</a></li>
		
	</ul>


	
	<?php
	
	
	echo "	<form method='POST' action='".setComments($conn)."'>
			<input type='hidden' name='uid' value='user'>
			<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
			<textarea name='message'></textarea><br>
			
			<button type='submit' name='commentSubmit'>Comment</button>


		</form>";
		
	
		getComments($conn);
	
	
	?>

</body>
</html>