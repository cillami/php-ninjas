<section class="col-md-4">
	<div class="latestPost">
		<?php
		$showPost = new Post($pdo);
		echo $showPost->latestPost();
		?>
	</div>
</section>