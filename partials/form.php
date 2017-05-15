<?php
//require '../config/config.php';
include 'header.php';
?>
<section class="col-md-6 col-sm-12 col-xs-12">
<div class="formFlex">
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
</div>
</section>
<?php
 include 'footer.php';
?>