<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
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

	public function getCommentByPostId($postId) {
		$statement = $this->pdo->prepare("
			SELECT * FROM comment
			LEFT JOIN user 
			ON comment.userId = user.userId
			WHERE comment.postId = :postId
			ORDER BY comment.commentDate DESC
			");
		$statement->execute([
			":postId" => $postId
			]);
		$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
		return $comments;
	} //function end


	public function deleteCommentByCommentId() {
		$statement = $this->pdo->prepare("

			");
	}
}

