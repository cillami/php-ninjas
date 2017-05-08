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

		$statement = $this->pdo->prepare("SELECT username FROM users WHERE username = :username
			");
		$statement->execute([":username" => $_POST['username']]);

		return $statement->fetchAll(PDO::FETCH_ASSOC);

	}

	public function createUser(){
		// var_dump($user);

		if($this->userInDb() == true)
		{
			echo "Username already exists!";
		}
		else 
		{
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
		}

} //end method

} //end class
