<?php
include "error.php";
include "database.php";


$statement = $pdo->prepare("
  INSERT INTO user (username, password, email, firstname, lastname)
  VALUES (:username, :password, :email, :firstname, :lastname)");

//Execute statement, fetch data
$statement->execute([
  ":username" => $_POST['username'],
  ":password" => $_POST['password'],
  ":email" => $_POST['email'],
  ":firstname" => $_POST['firstname'],
  ":lastname" => $_POST['lastname']
]);

header('Location: /php-ninjas');
