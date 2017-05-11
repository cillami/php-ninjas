<?php
include "error.php";
include "database.php";
include "post.php";

$countLike = new Post($pdo);
$data = $countLike->countLikesOnPostId();

var_dump($data);

foreach ($countLike as $likes) {

	$username = $post['username'];
	$postId = $post['id'];
	$userId = $post['userId'];
	// echo "<pre>";
	// print_r($userId);
	// echo "</pre>";
}
	?>




<?php include "footer.php"; ?>
 
