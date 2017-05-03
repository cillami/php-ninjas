<?php
session_start();
include "error.php";
include "database.php";



if (isset($_POST["username"]) && isset($_POST["password"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	// var_dump($_POST["password"]);

	$statement = $pdo->prepare("SELECT * FROM user WHERE username = :username
		");

	$statement->execute(
		[":username" => $username
		// ":password" => $password
		]
		);

	$data = $statement->fetch(PDO::FETCH_ASSOC);
 var_dump($data);
	if ($data > 0){
// $hej = '$2y$10$IQ9Run9r254CoSsZLr8SIuHqMrO/JvTCtlD1uu0hwM.';
	var_dump($password, $data[0]['password']){
			echo "password verify";

			$_SESSION["username"]= $username ;
			$_SESSION["password"]= $password ;
			header("Location: /php-ninjas/partials/home.php");
		}

		else{
			echo "Fel användarnamn eller password, försök igen!"; 
			// header("Location: ../index.php");
		}
	}

}
