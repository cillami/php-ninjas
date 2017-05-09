<?php
//start_session();
include "error.php";
include "database.php";
include "header.php";


$showPost = new Post($pdo);
$posts = $showPost->showPost();

// echo "<pre>";
// 	print_r($posts);
// 	echo "</pre>";

foreach ($posts as $row) {
	$title = $row['title'];
	$img = $row['img'];
	$blogText = $row['blogText'];
	$nrOfLikes = $row['nrOfLikes'];
	$postDate = $row['postDate'];
	$username = $row['username'];
	$postId = $row['id'];
	$userId = $row['userId'];
	//$comments = explode(";",$row['comments']);
	// echo "<pre>";
	// print_r($userId);
	// echo "</pre>";
	?>
	<div class='col-md-4 col-sm-12'>
		<div class='card'>
			<img class='card-img-top pt-15 img-fluid' src='<?= $img ?>' alt='Card image cap'>
			<div class='card-block'>
				<h4 class='card-title'> <?= $title ?></h4>
				<p class='card-text'>
					<?=$blogText ?>
				</p>
				<p class="card-text">
					Made by: <?= $username ?> <?= $postDate ?>
				</p>
				<?php 
				// include "showComment.php";
				?>
				<form action='createComment.php' method='POST'>
					<div class='form-group'>
						<textarea name='comment' type='text' class='form-control'></textarea>
					</div>
					<input type='hidden' name='postId' value='<?= $postId ?>' />
					<button type='submit' class='btn btn-primary'>Submit</button>
				</form>	 
 
				<?php 

				if($_SESSION['userId'] === $userId){
				?><a href='editViewForm.php?edit=<?= $postId ?>'> Edit</a> 
					<?php }

					?>


				</div>
			</div>
		</div>

		<?php
	}

include "footer.php";
?>