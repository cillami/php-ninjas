<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<title>PHP BLOG</title>
</head>
<body>
	<?php

	include "partials/error.php";
	include "partials/database.php";
    //include "partials/showpost.php";

//echo "TEST";
	?>
	<?php
include "partials/navbar.php";
	?>
<main class="container-fluid con">
	<div class="row">
		<div class="col-md-6">
			<h1>HELLO!</h1>
			<h1>WELCOME TO THE NINJABLOG PORTAL</h1>
			<h1>PLEASE SIGN UP TO BE ABLE TO USE OUR SERVICE</h1>
			<h1>ENJOY YOUR STAY!</h1>
		</div>
		<?php
		include "partials/signup.php";
		?>
		</div> <!-- ROW -->
	</main>




	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
