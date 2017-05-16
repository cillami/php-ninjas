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

?>
<!-- <h2 class="postWall">Post wall</h2> -->
<?php


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
				<form class="createComment">
					<div class='form-group'>
						<label>Create comment</label>
						<textarea id="commentArea" required="required" name='comment' type='text' class='form-control'></textarea>
					</div>
					<input type='hidden' name='postId' value='<?= $postId ?>' />
					<button  class="btn btn-success commentButton" type='submit' class='btn btn-primary'>Submit comment <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
				</form>	
				<div class="button-container d-flex justify-content-end"> 

					<?php 
					if($_SESSION['userId'] === $userId){
						?>
						<a class="btn btn-warning editPost" href='editViewForm.php?edit=<?=$postId ?>'>Edit post  <span i class="fa fa-pencil-square-o icon-edit" aria-hidden="true"></i></span> </a>

						<a class="btn btn-danger deletePost" href='deletePost.php?del=<?=$postId ?>'>Delete post  <span i class="fa fa-trash-o icon-delete" aria-hidden="true"></i></span></a> 
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