<?php
include "error.php";
include "database.php";
include "header.php";
?>
<?php 

$showPost = new Post($pdo);
$posts = $showPost->showPost();

foreach ($posts as $row) {
	$title = $row['title'];
	$img = $row['img'];
	$blogText = $row['blogText'];
	$nrOfLikes = $row['nrOfLikes'];
	$postDate = $row['postDate'];
	$username = $row['username'];
	$postId = $row['id'];
	?>
	<div class='col-md-4 col-sm-12'>
		<div class='card'>
			<img class='card-img-top pt-15 img-fluid' src='<?= $img ?>' alt='Card image cap'>
			<div class='card-block'>
				<h4 class='card-title'> <?= $title ?></h4>
				<p class='card-text'>
					<?=$blogText ?>
				</p>
				<p>
					Made by: <?= $username ?> <?= $postDate ?>
				</p>
				<form action='createComment.php' method='POST'>
					<div class='form-group'>
						<textarea name='comment' type='text' class='form-control'></textarea>
					</div>
					<input type='hidden' name='postId' value='<?= $postId ?>' />
					<button type='submit' class='btn btn-primary'>Submit</button>
				</form>			
			</div>
		</div>
	</div>
	<?php
}

?>
<?php
include "footer.php";
?>