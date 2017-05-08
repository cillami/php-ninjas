<?php
session_start();
include "error.php";
include "database.php";

class SignIn{

	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function signInUser()
	{

		if (isset($_POST["username"]) && isset($_POST["password"])) {


			$username = $_POST["username"];
			$password = $_POST["password"];

			$statement = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");

			$statement->execute([":username" => $username]);
			$data = $statement->fetch(PDO::FETCH_ASSOC);
			$_SESSION['isAdmin'] = $data['isAdmin'];
			$_SESSION['userId'] = $data['userId'];

			if ($data){

				if (password_verify($password, $data['password'])) {
					// echo 'Password is valid!';
					$_SESSION["username"]= $username ;
					
					if($data['isAdmin'] === 1){	
						$_SESSION['username'] = $username;

						// echo " isAdmin";
						header("Location: /php-ninjas/partials/home.php"); //admin

					}
					else{
						$_SESSION['username'] = $username;						
						header("Location: /php-ninjas/partials/home.php"); //user 
				}
			} 

			else {
				// echo 'Invalid password.';
				header("Location: ../index.php");

			}
		}
	}

}// siginIn User function end

} // class end


?>