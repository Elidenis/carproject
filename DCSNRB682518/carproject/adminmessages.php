


<!DOCTYPE html>
<html>
<head>
	<title>Admin messages</title>
	<link rel="stylesheet" href="css/admin-messages.css">
</head>
<body style="background: url(images/service.jpg); background-attachment: fixed;  background-size: cover;">

<header>
        <div class="menu-toggle" id="hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="overlay"></div>
        <div class="container">
            <nav>
                <h4 class="brand"><a href="#">Mess<span>ages</span></a></h4>
                <ul>
                    <li><a href="admin.php">Ho<span>me</span></a></li>
                    <li><a href="#">Ser<span>vices</span></a></li>
                    <li><a href="#">Ab<span>out</span></a></li>
                    <li><a href="#">Cont<span>act</span></a></li>
                    <li><a href="admincomments.php">Com<span>men</span>t</a></li>
                </ul>
            </nav>
        </div><br><br>

<?php 

include_once'dbh.inc.php';

$messages ="SELECT * FROM contact";
$out = mysqli_query($conn, $messages);

if (mysqli_num_rows($out) > 0  ) {
    while ( $row=mysqli_fetch_array($out) ) {
        echo "<div class='comment_box'><p>";
            echo $row['name']."<br>";
            echo $row['email']."<br><br><br>";
            echo nl2br($row['message']);
            //nl2br function converts the spaces from the db
            
        echo "</p> </div>";
        


            }
} 






 ?>





</header>



</body>



</html>