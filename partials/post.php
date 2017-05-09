<?php

include "error.php";
include "database.php";

class Post{

	private $pdo;

	public function __construct($pdo)
	{
		$this->pdo = $pdo;
	}

	public function createPost(){

		$statement = $this->pdo->prepare("
			INSERT INTO post (title, img, blogText, userId)
			VALUES (:title, :img, :blogText, :userId)");

//Execute statement, fetch data
		$statement->execute([
			":title" => $_POST['title'],
			":img" => $_POST['img'],
			":blogText" => $_POST['blogText'],
			":userId"=> $_SESSION['userId']
			]);

		header('Location: /php-ninjas/partials/home.php'); // CHANGE TO FETCH
	} //function end



	public function showPost(){

		$statement = $this->pdo->prepare("SELECT * FROM post
			INNER JOIN user 
			ON post.userId = user.userId
			ORDER BY postDate DESC
			");
		$statement->execute();

		$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

         return $posts;
		
	} //showPost end

	public function latestPost(){

		$statement = $this->pdo->prepare("SELECT * FROM post
			INNER JOIN user 
			ON post.userId = user.userId
			ORDER BY postDate DESC
			LIMIT 3 
			");
		$statement->execute();

		$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $posts;
	} 

	public function editPost(){

		$statement = $this->pdo->prepare("SELECT title, img, blogText, nrOfLikes, postDate,username, id FROM post
<<<<<<< HEAD
			INNER JOIN user 
=======
			INNER JOIN users 
>>>>>>> 33d547798965fc6014ab8d239c6b7f82df7ff589
			ON post.userId = user.userId
		 ");
		$statement->execute();

		$editPost = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $editPost;
		// var_dump($editPosts);
	} 

} // class end
