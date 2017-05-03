<?php
session_start();
if (!isset($_SESSION["username"])) {
	header("location:../index.php");
}
echo "Welcome". "  " .$_SESSION["username"];
echo '<p align="center"> <a href="logout.php">LOGOUT</a> </p>';
?>