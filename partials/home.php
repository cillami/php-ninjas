<?php
session_start();

include 'error.php';
include 'header.php';
include 'database.php';
include 'post.php'; 

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

	$showPost = new Post($pdo);
	$showPost->showPost();


include 'footer.php';
