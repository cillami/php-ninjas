	<?php
	include "partials/header.php";
	include "partials/error.php";
	include "partials/database.php";
	include "partials/post.php";
    //include "partials/showpost.php";

//echo "TEST";
	?>

	<?php
include "partials/navbar.php";
	?>
<main class="container-fluid con">
	<div class="row">
		
		<?php
		include "partials/welcometext.php";
		include "partials/signup.php";
		?>

		</div> <!-- ROW -->
		<div class="row">
			<section class="col-md-6 ml-auto mr-auto">
			<?php
				$showPost = new Post($pdo);
				echo $showPost->latestPost();
				?>
			</section>
		</div>
	</main>

	<?php
include "partials/footer.php";
	?>

