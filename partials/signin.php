<?php
session_start();
include "error.php";
include "database.php";

class Users{

	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function signIn()
	{


		if (isset($_POST["username"]) && isset($_POST["password"])) {


			$username = $_POST["username"];
			$password = $_POST["password"];



			$statement = $this->pdo->prepare("SELECT * FROM users WHERE username = :username");


			$statement->execute([":username" => $username]);
			$data = $statement->fetch(PDO::FETCH_ASSOC);

			if ($data){
				if (password_verify($password, $data['password'])) {
					header("Location: /php-ninjas/partials/home.php");
					echo 'Password is valid!';
					$_SESSION["username"]= $username ;
					/*$_SESSION["password"]= $password;*/

				} 
				else {
					header("Location: ../index.php");
					echo 'Invalid password.';

				}
			}
		}

}// siginIn User function end

	






} // class end

$user = new Users($pdo);
$user->signIn();

/*if (isset($_POST["username"]) && isset($_POST["password"])) {

	$username = $_POST["username"];
	$password = $_POST["password"];

	
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
}*/
