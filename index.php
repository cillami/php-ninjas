	<?php
	include "partials/headerIndex.php";
	include "partials/error.php";
	include "partials/database.php";
	include "partials/post.php";
	?>

	<?php
	include "partials/navbar.php";
	?>

	<main class="container-fluid con">
		<div class="row">

			<?php
			include "partials/welcometext.php";
			?>

		</div> <!-- ROW -->
		<div class="row">
			<?php
			include "partials/signup.php";
			?>
		</div>
		<div class="row">
			<?php
			include"partials/latestPost.php";
			?>
		</div>
	</main>

	<?php
	include "partials/footerIndex.php";
	?>

