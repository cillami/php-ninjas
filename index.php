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
	<div class=" bg img-responsive">
	<img src="img/logovit.png" class="logo">
	<h2 id="logotext">Share your life with your friends wherever you are</h2>

</div>
		<div class="row">
		<?php
			include "partials/welcometext.php";
			?> 

		</div> <!-- ROW -->
		<div class="row signUpDiv">
			<?php
			include "partials/signup.php";
			?>
		</div>
		<div class="row latestPostDiv">
 			<?php
			include"partials/latestPost.php";
			?> 
		</div>
	</main>

	<?php
	include "partials/footerIndex.php";
	?>

