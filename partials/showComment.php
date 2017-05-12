<?php
$showNewComment = new Comment($pdo);
$comments = $showNewComment->getCommentByPostId($postId);
				//var_dump($comments);
foreach ($comments as $comment) {
	?>
	<p id="display_p" class="card-text">
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