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
		<a class="navbar-brand" href="#">Ninja Blog</a>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<form class="form-inline">
					<input name="username" class="form-control mr-sm-2" type="text" placeholder="Username">
					<input name="password" class="form-control mr-sm-2" type="password" placeholder="Password">
					<button class="btn btn-success my-2 my-sm-0" type="submit">Sign </button>
				</form>
			<!-- 	<li class="nav-item">
					<a class="nav-link" href="partials/form.php">FORM</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="partials/signup.php">DONT SIGN UP</a>
				</li>
			</div>

			<li class="nav-item">
				<a class="nav-link" href="partials/contact.php">Contact</a>
			</li>
		</ul>
	</div>
</nav>
<main class="container-fluid con">
	<div class="row">
		<div class="col-md-6">
			<h1>HELLO!</h1>
			<h1>WELCOME TO THE NINJABLOG PORTAL</h1>
			<h1>PLEASE SIGN UP TO BE ABLE TO USE OUR SERVICE</h1>
			<h1>ENJOY YOUR STAY!</h1>
		</div>
		<div class="col-md-6">
				<section class=" con-signup">
					<form action="register.php" method="POST">
						<div class="form-group">
							<label for="username">Username</label>
							<input name="username" type="text" class="form-control" id="username" placeholder="">

						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input name="password" type="password" class="form-control" id="password" placeholder="">

						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input name="email" type="email" class="form-control" id="email" placeholder="">

						</div>
						<div class="form-group">
							<label for="firstname">Firstname</label>
							<input name="firstname" type="text" class="form-control" id="firstname" placeholder="">

						</div>
						<div class="form-group">
							<label for="firstname">Lastname</label>
							<input name="lastname" type="text" class="form-control" id="firstname" placeholder="">

						</div>
						<div class="form-group">
							<label for="lastname">Phone</label>
							<input name="phone" type="number" class="form-control" id="lastname" placeholder="">
						</div>

						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
				</section>
			</div>
		</div> <!-- ROW -->
	</main>




	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>
