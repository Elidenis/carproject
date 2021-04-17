<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin panel</title>
    <style>
     
* {
  font-family: 'Open Sans', sans-serif;
  box-sizing: border-box;
  color: #333;
  font-size: 100%;
  line-height: 1.5;
}
nav {
  position: relative;
  width: 220px;
  margin: 20px;
}
nav ol {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
nav li {
  margin: -4px 0 0 0;
}
nav a {
  display: block;
  text-decoration: none;
  background: #fff;
  transform-origin: 0 0;
  transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
  transition-delay: var(--delay-out);
  border-radius: 4px;
  padding: 1em 1.52em;
}
nav a:hover {
  background: green;
}
nav .sub-menu a {
  font-size: .9em;
  color: #666666;
  border-left: 2em solid white;
  padding: .75em;
  background: linear-gradient(to right, #dddddd 2px, #ffffff 2px);
}
nav .sub-menu a:hover {
  background: linear-gradient(to right, #dddddd 2px, #efefef 2px);
}
nav header {
  font-weight: 600;
  display: block;
  background: rgba(255, 255, 255, 0.5);
  transform-origin: 0 0;
  transition: transform var(--duration) var(--easing), color var(--duration) var(--easing);
  transition-delay: var(--delay-out);
  border-radius: 4px;
  padding: 1em 1.52em;
}
nav header span {
  border: none;
  background: transparent;
  font-size: 1.5em;
  padding: 0;
  cursor: pointer;
  line-height: 1;
  float: right;
}


.wrapper{
  cursor: pointer;
  margin-top: 0px;
  margin-left: 1080px;
  width: 230px;
  height: 120px;
  color: white;
  border: 1px solid green;
  border-radius: 5px;
  opacity: .8;
}

    
    </style>
</head>
<body style="background: url(images/ferrari.jpg); background-attachment: fixed; background-size: 100%">
   
    <nav class="menu">
              <div class="wrapper">
                  <!-- notification message -->
                  <?php if (isset($_SESSION['success'])) : ?>
                    <div class="error success" >
                      <h4>
                        <?php 
                           unset($_SESSION['success']);
                        ?>
                      </h4>
                    </div>
                        <?php endif ?>

                  <!-- logged in user information -->
                  <?php  if (isset($_SESSION['username'])) : ?>
                    <p>You are loged in as: <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p> <a href="index.php?logout='1'" style="color: green;">logout</a></p>
                  <?php endif ?>
</div>
    <header>Menu <span>×</span></header>
    <ol>
        <li class="menu-item"><a href="admin.php">Home</a></li>
        <li class="menu-item"><a href="#0">About</a></li>
        <li class="menu-item">
            <a href="#0">Categories</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="adminmessages.php">Messages</a></li>
                <li class="menu-item"><a href="admincomments.php">Comments</a></li>
                <li class="menu-item"><a href="#0">Bookings</a></li>
            </ol>
        </li>
        <li class="menu-item">
            <a href="#0">Users</a>
            <ol class="sub-menu">
                <li class="menu-item"><a href="#0">Older</a></li>
                <li class="menu-item"><a href="#0">New</a></li>
                <li class="menu-item"><a href="carlisting.php">Uploads</a></li>
            </ol>
        </li>
        <li class="menu-item"><a href="#0">Contact</a></li>
    </ol>
   
</nav> 
                  

</body>
</html>