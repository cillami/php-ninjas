<?php>
//require '../config/config.php';
include 'header.php';
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/default.css">
	<title>Create Post</title>
</head>
<body>
<form action="createPost.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Blog Title</label>
    <input name="title" type="text" class="form-control" id="blogTitle" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="img" type="text" class="form-control" id="blogImg" placeholder="Insert image here">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Write Post</label>
    <textarea name="blogText" class="form-control" id="blogText" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
 include 'footer.php';
?>