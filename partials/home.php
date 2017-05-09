<?php
//session_start();
include 'header.php';
include 'error.php';
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

	echo "Welcome"."  ". '<a href="profile.php">'. $username .'</a>'
;

	//echo "Welcome". "  " .$username;

   include "showpostOnHtml.php";

   include "editPostOnHtml.php";


include 'footer.php';
