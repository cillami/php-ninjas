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

	public function alert($alert){
		echo '<script type="text/javascript">alert("' . $alert . '")</script>';
	}

	public function createUser(){
		// var_dump($user);
		// include 'alert.php';

		if($this->userInDb() == true)
		{
			$this->alert("Username already exists! Please try a new one.");
			echo'<script>window.location="../";</script>';
			// include 'index.php';

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
			echo'<script>window.location="../";</script>';
		}

<<<<<<< HEAD
		header('Location: /php-ninjas'); //CHANGE TO FETCH
=======
>>>>>>> 4be64af6a703e42c3a5e69dd293a0d2f8a21f8e8
} //end method

} //end class