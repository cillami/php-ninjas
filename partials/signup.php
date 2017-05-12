<?php 
?>

<div class="col-md-4 col-sm-12">
        <section class="margin-t con-signup">
        <div>
        <?php 
        if(isset($_GET["error"]))
        {
          echo $_GET["error"];
        } 

        ?>
        </div><p id="message"></p>
          <form id="RegUserForm" method="POST">
            <div class="form-group">
              <label class="inputLabel" for="username">Username</label>
              <input name="username" type="text" class="form-control" id="username" placeholder="">
            </div>
            <div class="form-group">
              <label class="inputLabel" for="password">Password</label>
              <input name="password" type="password" class="form-control" id="password" placeholder="">
            </div>
            <div class="form-group">
              <label class="inputLabel" for="email">Email</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="">
            </div>
            <div class="form-group">
              <label class="inputLabel" for="firstname">Firstname</label>
              <input name="firstname" type="text" class="form-control" id="firstname" placeholder="">
            </div>
            <div class="form-group">
              <label class="inputLabel" for="firstname">Lastname</label>
              <input name="lastname" type="text" class="form-control" id="firstname" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary" id="submitRegUser">Submit</button>
          </form>
        </section>
      </div>

