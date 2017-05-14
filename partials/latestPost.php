<section class="col-md-4">
	<div class="latestPost">
		<?php
		include "error.php";
		include "database.php";

		$showPost = new Post($pdo);
		$lPosts = $showPost->latestPost();
		
		foreach ($lPosts as $row) {
			$title = $row['title'];
			$img = $row['img'];
			$blogText = $row['blogText'];
			$nrOfLikes = $row['nrOfLikes'];
			$postDate = $row['postDate'];
			$username = $row['username'];
			?>
			<div class='col-md-10 col-sm-12 col-xs-12'>
				<div class='card lPost margin-t'>
					<img class='card-img-top pt-15 img-fluid' src='<?= $img ?>' alt='Card image cap'>
					<div class='card-block'>
						<h4 class='card-title'><?= $title ?></h4>
						<p class='card-text'>
							<?= $blogText ?>
						</p>
						<p>
							Made by: <?= $username?> <?=$postDate ?>
						</p>
					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
</section>
