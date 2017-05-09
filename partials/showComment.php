<?php
include "header.php";
include "error.php";
include "database.php";
include "comment.php";
?>

<?php
$showNewComment = new Comment($pdo);
$comments = $showNewComment->showComment();

foreach ($comments as $row) {
	$newComment = $row['comment'];
	$commentDate = $row['commentDate'];
	$username = $row['username'];
	$postId = $row['id'];

	?>
	<p class="card-text">
		<?= $newComment ?>
	</p>
    <p class="card-text">
    	Comment by: <?= $username ?> <?= $commentDate ?>
    </p>
	<?php
}
?>

<?php
include "footer.php";
?>