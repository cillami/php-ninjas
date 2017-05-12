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

		$statement = $this->pdo->prepare("SELECT username, email FROM user WHERE username = :username OR email = :email
			");
		$statement->execute([
			":username" => $_POST['username'],
			":email" => $_POST['email']
			]);

		return $statement->fetchAll(PDO::FETCH_ASSOC); 

	}

	// public function alert($alert){
	// 	echo '<script type="text/javascript">alert("' . $alert . '")</script>';
	// }

	public function createUser(){
 
		$email = $_POST['email'];
		$user = $_POST['username'];

		$arr = $this->userInDb();

		if(count($arr) === 0)
		{
			$hash = password_hash($_POST['password'], PASSWORD_DEFAULT); 

			$statement = $this->pdo->prepare("
				INSERT INTO user (username, password, email, firstname, lastname)
				VALUES (:username, :password, :email, :firstname, :lastname)");

//Execute statement, fetch data
			$statement->execute([
				":username" => $_POST['username'],
				":password" => $hash,
				":email" => $_POST['email'],
				":firstname" => $_POST['firstname'],
				":lastname" => $_POST['lastname']
				]);
			
			// echo'<script>window.location="../";</script>';
		}
		else if($arr[0]['username'] == $user && $arr[0]['email'] == $email){

			$error = "Username and email-address already exists! Please try again.";
			// $this->alert("Username and email-address already exists! Please try again.");
			// echo'<script>window.location="../";</script>';
			header("Location: /php-ninjas?error=$error");
		}
		else if($arr[0]['username'] == $user){

			$error = "Username already exists! Please choose a new one.";
			header("Location: /php-ninjas?error=$error");
		}
		else if($arr[0]['email'] == $email){

			$error = "Email-address already exists! Please choose a new one.";
			header("Location: /php-ninjas?error=$error");
		}

		// header('Location: /php-ninjas'); //CHANGE TO FETCH

} //end method

} //end class