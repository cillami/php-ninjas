<?php
//require '../config/config.php';
include 'header.php';
?>
<section class="col-md-12 col-sm-12 col-xs-12">
<div class="formFlex">

<form action="createPost.php" method="POST">
  <div class="form-group">
    <h2>Create new post</h2>
    <br>
    <input name="title" type="text" class="form-control" id="blogTitle" placeholder="Enter title">
  </div>
  <div class="form-group">
    <input name="img" type="text" class="form-control" id="blogImg" placeholder="Image: insert http-link">
  </div>
  <div class="form-group">
    <textarea name="blogText" class="form-control" id="blogText" rows="3" placeholder="Write post"></textarea>
  </div>
  <button type="submit" class="btn btn-success btn-block">Submit post <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
</form>

</div>
</section>
<?php
 include 'footer.php';
?>