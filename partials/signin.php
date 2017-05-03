<?php
session_start();
include "error.php";
include "database.php";



if (isset($_POST["username"]) && isset($_POST["password"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	// var_dump($_POST["password"]);
	// $hash = password_hash($password, PASSWORD_DEFAULT);

	$statement = $pdo->prepare("SELECT * FROM user WHERE username = :username
		");

	$statement->execute(
		[":username" => $username
		// ":password" => $password
		]
		);

	$data = $statement->fetch(PDO::FETCH_ASSOC);

	if ($data > 0){

		if(password_verify($password, $data[0]['password'])){

			$_SESSION["username"]= $username ;
			$_SESSION["password"]= $password ;
			header("Location: /php-ninjas/partials/home.php");
		}

		else{
			echo "Fel användarnamn eller password, försök igen!"; 
			header("Location: ../index.php");
		}
	}

}
