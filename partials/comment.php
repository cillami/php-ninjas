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
			INSERT INTO comment (comment, userId, postId)
			VALUES (:comment, :userId, :postId)");

//Execute statement, fetch data
		$statement->execute([

			":comment" => $_POST['comment'],
			":userId" => $_SESSION['userId'],
			":postId" => $_POST['postId']
			]);

		header('Location: /php-ninjas/partials/home.php');
	} //function end


	public function getComment() {
		$statement = $this->pdo->prepare("
			SELECT * FROM comment
			LEFT JOIN post 
			ON comment.postId = post.Id
			LEFT JOIN user 
			ON comment.userId = user.userId
			ORDER BY comment.commentDate DESC
			");
		$statement->execute();
		$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $comments;
	} //function end
}

