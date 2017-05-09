<?php 
include 'error.php';
include 'database.php';
include 'editPost.php';
include 'header.php';
?>


<form action="savePost.php" method="POST">

  <div class="form-group">
    <label for="editViewFormTitle">Blog Title</label>

  <input name="title" type="text" class="form-control" id="blogTitle" placeholder="Enter Title" value="<?= $data['title'] ?>" >
  </div>
  <div class="form-group">
    <label for="editViewFormImage">Image</label>
    <input name="img" type="text" class="form-control" id="blogImg" placeholder="Insert image here" value="<?= $data['img'] ?>">
  </div>
  <div class="form-group">
    <label for="editViewFormText">Write Post</label>
    <input name="blogText" class="form-control" id="blogText" rows="3" value='<?= $data["blogText"] ?>'> 
 </div>
  <div class="form-group">
    <input type="hidden" name="id" class="form-control" id="blogText" rows="3" value='<?= $data["id"] ?>'> 

  </div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>


<?php include 'footer.php';
?>

