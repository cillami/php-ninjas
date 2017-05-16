<?php
if (session_status() == PHP_SESSION_NONE) {
	session_start();
}
include "error.php";
include "database.php";
include "header.php";
include "comment.php";
include "like.php";
$getAllLikes = new Like($pdo);
$allLikesFromDb = $getAllLikes->getAllLikes();

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
	$count = 0;
	foreach ($allLikesFromDb as $like) {
		if ($like['postId'] === $post['id']) {
			$count++;			
		}
	}

	?>

	<div class='col-md-12 col-sm-12'>

		<div class='card margin-t'>
			<img class='card-img-top pt-15 img-fluid' src='<?= $post['img'] ?>' alt='No image added'>
			<div class='card-block'>
				<h4 class='card-title'> <?= $title ?></h4>
				<p class='card-text'>
					<?=$blogText ?>
				</p>
				<p class="card-text color">
					Posted by: <?= $username ?> <?= $postDate ?>
				</p>
				<?php
			     include "showComment.php";
				?>
				<form class="createComment">
					<div class='form-group'>
						<label>Create comment</label>
						<textarea id="commentArea" required="required" name='comment' type='text' class='form-control'></textarea>
					</div>
					<input type='hidden' name='postId' value='<?= $postId ?>' />
					<button  class="btn btn-outline-primary commentButton" type='submit' class='btn btn-primary'>Submit Comment</button>
				</form>	
				<div class="button-container d-flex justify-content-end"> 
				<?php 
				if($_SESSION['userId'] === $userId){
					?>
					<a class="btn btn-info" href='editViewForm.php?edit=<?=$postId ?>'> Edit post</a>
					<a class="btn btn-danger deletePost" href='deletePost.php?del=<?=$postId ?>'> Delete post</a> 
					<?php 
				}
				else if ($_SESSION['isAdmin']){
					?>
					<a class="btn btn-danger deletePost" href='deletePost.php?del=<?=$postId ?>'> Delete post</a>  
					<?php }
					?>

					
					
					<a class="ml-auto" href='getLike.php?like=<?=$postId ?>'> <i class="fa fa-heart fa-2x heart" style="color:red;"></i></a>
							<?php if($count > 0){
							echo $count;
							?> </div> <?php
						} ?>			
				</div>
			</div>
		</div>
		<?php
	}
	include "footer.php";
	?>