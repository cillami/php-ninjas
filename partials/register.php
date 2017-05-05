<?php
session_start();
include "error.php";
include "database.php";

class Register{
	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}


	public function userInDb(){

		$statement = $this->pdo->prepare("SELECT username FROM users 
			");
		$statement->execute();

		$checkUser = $statement->fetchAll(PDO::FETCH_ASSOC);

		// var_dump($checkUser[0]['username']);

			foreach($checkUser as $user){
			$userDb = $user['username'];
		}
		var_dump($user['username']);

	}

	public function createUser(){

		$checkUsers = $this->userInDb();
		var_dump($checkUsers);




	  	// $hej = $this->userInDb($this->checkUser); // ??
		// var_dump($hej);

		$hash = password_hash($_POST['password'], PASSWORD_DEFAULT); 

		$statement = $this->pdo->prepare("
			INSERT INTO users (username, password, email, firstname, lastname)
			VALUES (:username, :password, :email, :firstname, :lastname)");

//Execute statement, fetch data
		$statement->execute([
			":username" => $_POST['username'],
			":password" => $hash,
			":email" => $_POST['email'],
			":firstname" => $_POST['firstname'],
			":lastname" => $_POST['lastname']
			]);


		header('Location: /php-ninjas');
} //end method

} //end class

$userInDb = new Register($pdo);
$userInDb->userInDb();