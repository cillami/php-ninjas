<?php
session_start();
include "error.php";
include "database.php";
if (isset($_POST["username"]) && isset($_POST["password"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];
	$statement = $pdo->prepare("SELECT * FROM user WHERE username = :username AND password = :password
	");
$statement->execute(
	[":username" => $username,
     ":password" => $password
	]
	);
$data = $statement->fetch(PDO::FETCH_ASSOC);
    
    if ($data > 0){

    	$_SESSION["username"]= $username ;
    	$_SESSION["password"]= $password ;
    	header("Location: /php-ninjas/partials/home.php");
    }



	
}

?>