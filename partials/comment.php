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
			INSERT INTO comments (comment, userId, postId)
			VALUES (:comment, :userId, :postId)");

//Execute statement, fetch data
		$statement->execute([

			":comment" => $_POST['comment'],
			":userId" => $_SESSION['userId'],
			":postId" => $_POST['postId']
			]);

		header('Location: /php-ninjas/partials/home.php');
	} //function end


	public function showComment() {
		$statement = $this->pdo->prepare("SELECT * FROM comments
			INNER JOIN post 
			ON comments.postId = post.Id
			INNER JOIN users 
			ON comments.userId = users.userId
			ORDER BY comments.commentDate DESC
			");
		$statement->execute();
		$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $comments;
	} //function end
}

