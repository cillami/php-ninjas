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

	<div class='col-md-8 col-sm-12'>

		<div class='card margin-t'>
			<!-- <img class='card-img-top pt-15 img-fluid' src='<?= $post['img'] ?>' alt='No image added'> -->
			<?php
					if (!empty($post['img'])) {
						?>
						<img class='card-img-top pt-15 img-responsive' src='<?= $post['img']  ?>' alt='no image added'>
						<?php	
					}
					else {
						$default = "../img/default.jpg"
						?>
						<img class='card-img-top pt-15 img-responsive' src='<?= $default ?>' alt='no image added'>
						<?php
					}
					
					?>
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
				<form class="createComment" action="createComment.php" method="POST">
					<div class='form-group'>
						<label>Create comment</label>
						<textarea required="required" name='comment' type='text' class='form-control'></textarea>
					</div>
					<input type='hidden' name='postId' value='<?= $postId ?>' />
					<input class="btn btn-outline-primary commentButton" type='submit' value="Submit Comment"/>
				</form>	 

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