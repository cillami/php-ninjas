<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/default.css">
  <title>Register User</title>
</head>
<body>
  <form action="register.php" method="POST">
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Firstname</label>
      <input name="firstname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Lastname</label>
      <input name="lastname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
      
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</body>
</html>