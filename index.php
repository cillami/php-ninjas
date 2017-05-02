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
	<nav class="myNav navbar navbar-toggleable-md navbar-inverse bg-inverse">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">PHP-Ninja Blog</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<!-- <li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li> -->
				<form class="form-inline">
					<input name="username" class="form-control mr-sm-2" type="text" placeholder="Username">
					<input name="password" class="form-control mr-sm-2" type="password" placeholder="Password">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sign </button>
				</form>
				<li class="nav-item">
					<a class="nav-link" href="partials/contact.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="navbar">
		<!--<a href="partials/post.php">POST</a>-->
		<a href="partials/form.php">FORM</a>
		<a href="partials/signup.php">SIGN UP</a>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
