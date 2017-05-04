<?php
session_start();

include 'header.php';

$username = $_SESSION["username"];

if (!isset($username)) {
	header("location:../index.php");
}

	if($_SESSION['isAdmin'] === 1){
		include 'adminNavbar.php';
	}
	else{
		include 'userNavbar.php';
}
	echo "Welcome". "  " .$username;
	echo '<p align="center"> <a href="logout.php">LOGOUT</a> </p>';

include 'footer.php';
?>