<!DOCTYPE html>
<html>
<head>
	<title>Admin||Comments</title>
	<link rel="stylesheet" href="css/admin-messages.css">
</head>
<body style="background: url(images/urusdark.jpg); background-attachment: fixed;  background-size: 100%">
<header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h4 class="brand"><a href="#">Com<span>men</span>ts</a></h4>
                <ul>
                    <li><a href="admin.php">Ho<span>me</span></a></li>
                    <li><a href="#">Ser<span>vices</span></a></li>
                    <li><a href="#">Ab<span>out</span></a></li>
                    <li><a href="adminmessages.php">Mess<span>ages</span></a></li>
                    <li><a href="#">Com<span>men</span>t</a></li>
                </ul>
            </nav>
        </div><br><br>

<?php 

include_once'dbh.inc.php';

$messages ="SELECT * FROM comments order by date DESC";
$out = mysqli_query($conn, $messages);

if (mysqli_num_rows($out) > 0  ) {
    while ( $row=mysqli_fetch_array($out) ) {
        echo "<div class='comment_box'><p>";
            //echo $row['uid']."<br>";
            echo nl2br($row['message'])."<br><br>";
            //nl2br function converts the spaces from the db
            echo $row['date'];
        echo "</p> </div>";


            }
} 

 ?>

        </header>
    </body>
</html>