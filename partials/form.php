<?php
//require '../config/config.php';
include 'header.php';
?>
<section class="col-md-12 col-sm-12 col-xs-12">
<div class="formFlex">

<form action="createPost.php" method="POST">
  <div class="form-group">
    <h2>Create new post</h2>
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" id="blogTitle" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="img" type="text" class="form-control" id="blogImg" placeholder="Insert http-link here">
  </div>
  <div class="form-group">
    <label for="exampleTextarea">Write Post</label>
    <textarea name="blogText" class="form-control" id="blogText" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit post</button>
</form>

</div>
</section>
<?php
 include 'footer.php';
?>