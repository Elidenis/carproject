<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome</title>
	<link rel="stylesheet" type="text/css" href="css/navigation.css">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<ul>

		<li><a href="welcome.php">Home</a></li>
		<li><a href="carlisting.php">Cars</a></li>
		<li><a href="">About us</a>
			<ul>
				<li><a href="">Our Teams</a></li>
				<li><a href="">Services</a></li>
			</ul>

		</li>
		<li><a href="comment.php">Comment</a></li>
		<li><a href="contuct.php">contact us</a>

			<ul>
				<li><a href="https://web.facebook.com/campaign/landing.php?&campaign_id=1654945166&extra_1=s%7Cc%7C318722310674%7Cb%7Clogin%7C&placement&creative=318722310674&keyword=login&partner_id=googlesem&extra_2=campaignid%3D1654945166%26adgroupid%3D64292161835%26matchtype%3Db%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-11037921%26loc_physical_ms%3D1009824%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=EAIaIQobChMI1e6J066j4QIVF-R3Ch3jmQXbEAAYASAAEgLhxvD_BwE&_rdc=1&_rdr">Facebook</a></li>
				<li><a href="https://accounts.google.com/ServiceLogin/identifier?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&ss=1&scc=1&ltmpl=default&ltmplcache=2&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Gmail</a></li>
				
			</ul>

		</li>
		<li><a href="index.php">Booking</a>
			<ul>
				<li><a href="priced-cars.php">Top Cars</a></li>
				<li><a href="moderateprice.php">Moderate Cars</a></li>
			</ul>
		</li>
		<li><a href="">Location</a>

			<ul>
				<li><a href="">Our site</a></li>
				<li><a href="">warehouses</a></li>
			</ul>

		</li>
		<li><a href="#"> Hi,<?php echo htmlspecialchars($_SESSION["username"]) ; ?></a></li>
		<li><a href="logout.php" class="btn btn-danger">Logout</a>
			<ul>
			<li><a href="reset.php" class="btn-reset">Password Reset</a></li>
		</ul>
		</li>
	</ul>
</head><br><br><br><br>
	<body style="background: url(images/listing.jpg); background-attachment: fixed; background-size: 100%">
		<div class="content">
			<div class="slider">
			<figure>
				<div class="slide">
						<p>Aventador</p>
						<img src="mainproject/images/aventador.jpg">
					</div>

					<div class="slide">
						<p>Aston Martins</p>
						<img src="mainproject/images/Am2.jpg">
					</div>
					
					<div class="slide">
						<p>Urus</p>
						<img src="mainproject/images/5.jpg">
					</div>
					
					<div class="slide">
						<p>Chevrolet</p>
						<img src="mainproject/images/chevy2.jpg">
					</div>
					
					<div class="slide">
						<p>Harrier</p>
						<img src="mainproject/images/1.jpg">
					</div>
				</figure>
			</div>
		</div>
	</body>
</html>