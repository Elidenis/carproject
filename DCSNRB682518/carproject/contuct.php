<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login.php");
    exit;
}

$server ="localhost";
$user = "root";
$pass ="";
$db = "dexter";

$conn = mysqli_connect($server,$user,$pass, $db);
if (!$conn) {
	die("connection failure");
} else{
	

//checking the form
 if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mail = $_POST['mail'];
$message = $_POST['message'];

if (empty($name)) {
	
	echo '<script text/javascript>alert("please give us your Name")</script>';
	echo '<script>window.location="contuct.php"</script>';
}

	if (empty($mail)) {
		echo '<script text/javascript>alert("Ooops!, your email is missing")</script>';
		echo '<script>window.location="contuct.php"</script>';
	}

		if (empty($message)) {
			echo '<script text/javascript>alert("You can not leave the Message as a empty!")</script>';
			echo '<script>window.location="contuct.php"</script>';		}

else {
	
	$sql ="INSERT INTO contact (name,email,message) VALUES('$name','$mail','$message')";
	$result = mysqli_query($conn, $sql);
	if ($result >0) {


			echo '<script text/javascript>
							alert("Your message has been received and will be replied within 24hrs")
								</script>';
							echo '<script>window.location="contuct.php"</script>';


			}		else{
							echo '<script type="text/javascript"> 
									alert("Something went wrong")</script>';
									echo '<script type="text/javascript">window.location="contuct.php"</script>';
				}
}
}

}

 
?>




<!DOCTYPE html>
<html>
<head>
	<title>contuct us</title>
	<link rel="stylesheet" type="text/css" href="cs/style.css">
	<link rel="stylesheet" type="text/css" href="css/contact-nav.css">
</head>
<body class="contuct-body" style="background: url(images/contact1.jpg); background-attachment: fixed; background-size: 100%">
	

	<ul>
		<li><a href="welcome.php">Home</a></li>
		<li><a href="">Social media</a>
			<ul>
				
				<li><a href="https://web.facebook.com/campaign/landing.php?&campaign_id=1654945166&extra_1=s%7Cc%7C318722310674%7Cb%7Clogin%7C&placement&creative=318722310674&keyword=login&partner_id=googlesem&extra_2=campaignid%3D1654945166%26adgroupid%3D64292161835%26matchtype%3Db%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-11037921%26loc_physical_ms%3D1009824%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=EAIaIQobChMI1e6J066j4QIVF-R3Ch3jmQXbEAAYASAAEgLhxvD_BwE&_rdc=1&_rdr">Facebook</a></li>
				<li><a href="">Twitter</a></li>
				<li><a href="">Instagram</a></li>
			</ul>
		</li>
		<li><a href="">Talk to us</a>
			<ul>
				<li><a href="">Our Teams</a></li>
				<li><a href="">Customer care</a></li>
				
			</ul>

		</li>
		<li><a href="comment.php">Comment</a></li>
		<li><a href="">contact us</a>

			<ul>
				<li><a href="">Facebook</a></li>
				<li><a href="">Gmail</a></li>
				
			</ul>

		</li>
		<li><a href="">About Us</a>
			<ul>
				<li><a href="">Current</a></li>
				<li><a href="">Added Cars</a></li>
				<li><a href="">Plan a trip</a></li>
			</ul>
		</li>
		
		<li><a href="logout.php" class="btn btn-danger">Logout</a>
				<ul>
					<li><a href="reset.php" class="btn-reset">Password Reset</a></li>
				</ul>
		</li>
	</ul>


<div class="header">
	
	<p>
		We value all our customers' feedback, to help drive the entire system, by providing them with a suitable and an interractive environment to ensure they exploit more of our resources than ever!.......we hope to hear from you. Don't be left out!
	</p>
	
</div>
<div class="from">
	<form action="contuct.php" method="POST">
		<label class="lable">Name:</label><br>
		<input type="text" name="name" placeholder="Name"><br>
		<label class="lable">e-mail:</label><br>
		<input type="text" name="mail" placeholder="e_mail"><br>
		<label class="lable">Massage:</label><br>
		<textarea class="contuct-textarea" name='message'></textarea><br>
		<button type="submit" class="commentent" name="submit">Talk to us</button>
	</center>
	</form>
	
</div>

</body>
</html>