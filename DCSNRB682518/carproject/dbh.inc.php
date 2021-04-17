<?php
// creation of the connection
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'dexter';
$conn = mysqli_connect($server, $user, $pass, $db);
if (!$conn) {
	die("Connection failed!:". mysqli_connect_error());
}
?>