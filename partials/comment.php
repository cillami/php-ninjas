<?php
session_start();
include "error.php";
include "database.php";


class Comment {
   private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function createComment(){

		$statement = $this->pdo->prepare("
			INSERT INTO comments (comment, mentions, userId, postId)
			VALUES (:comment, :mentions, :userId, :postId)");

//Execute statement, fetch data
		$statement->execute([
			":comment" => $_POST['comment'],
			":mentions" => $_POST['mentions'],
			":userId" => $_SESSION['userId'],
			":postId" => $_SESSION['postId']
			]);

		header('Location: /php-ninjas/partials/home.php');
	} //function end
}

