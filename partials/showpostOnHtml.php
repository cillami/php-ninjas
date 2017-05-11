<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include "error.php";
include "database.php";
include "header.php";
include "comment.php";

$showPost = new Post($pdo);
$posts = $showPost->showPost();

// echo "<pre>";
// 	print_r($posts);
// 	echo "</pre>";
foreach ($posts as $post) {
	$title = $post['title'];
	//$img = $post['img'];
	$blogText = $post['blogText'];
	$nrOfLikes = $post['nrOfLikes'];
	$postDate = $post['postDate'];
	$username = $post['username'];
	$postId = $post['id'];
	$userId = $post['userId'];
	// echo "<pre>";
	// print_r($userId);
	// echo "</pre>";
	?>
	<div class='col-md-4 col-sm-12'>
		<div class='card'>
			<img class='card-img-top pt-15 img-fluid' src='<?= $post['img'] ?>' alt='Card image cap'>
			<div class='card-block'>
				<h4 class='card-title'> <?= $title ?></h4>
				<p class='card-text'>
					<?=$blogText ?>
				</p>
				<p class="card-text">
					Made by: <?= $username ?> <?= $postDate ?>
				</p>
				<?php
				$showNewComment = new Comment($pdo);
				$comments = $showNewComment->getCommentByPostId($postId);
				//var_dump($comments);
				foreach ($comments as $comment) {
					?>
					<p class="card-text">
						<?= $comment['comment'] ?>
					</p>
					<p class="card-text">
						Comment by: <?= $comment['username'] ?> <?= $comment['commentDate'] ?>
						<?php
						if ($_SESSION['isAdmin']) {
							?>
							<a href='deleteComment.php?del=<?=$comment['commentId'] ?>'>Delete</a>
							<?php
						}
						?>
					</p>
					<?php
				}
				?>
				<form action='createComment.php' method='POST'>
					<div class='form-group'>
					<label>Create comment</label>
						<textarea name='comment' type='text' class='form-control'></textarea>
					</div>
					<input type='hidden' name='postId' value='<?= $postId ?>' />
					<button type='submit' class='btn btn-primary'>Submit</button>
				</form>	 
				<?php 
				if($_SESSION['userId'] === $userId){
					?>
					<a href='editViewForm.php?edit=<?=$postId ?>'> Edit</a>
					<a href='deletePost.php?del=<?=$postId ?>'> Delete</a>  
					<?php 
				}
				else if ($_SESSION['isAdmin']){
					?>
					<a href='deletePost.php?del=<?=$postId ?>'> Delete</a>  
					<?php }
					?>
					<a href='getLike.php?like=<?=$postId ?>' class="like"> Like </a> 
					
				</div>
			</div>
		</div>
		<?php
	}
	include "footer.php";
	?>