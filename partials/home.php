<?php
session_start();

$username = $_SESSION["username"];

if (!isset($username)) {
	header("location:../index.php");
}
echo "Welcome". "  " .$username;
echo '<p align="center"> <a href="logout.php">LOGOUT</a> </p>';
?>