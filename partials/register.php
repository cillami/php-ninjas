<?php
include "error.php";
include "database.php";

$hash = password_hash($_POST['password'], PASSWORD_DEFAULT); 

$statement = $pdo->prepare("
  INSERT INTO users (username, password, email, firstname, lastname)
  VALUES (:username, :password, :email, :firstname, :lastname)");

//Execute statement, fetch data
$statement->execute([
  ":username" => $_POST['username'],
  ":password" => $hash,
  ":email" => $_POST['email'],
  ":firstname" => $_POST['firstname'],
  ":lastname" => $_POST['lastname']
]);


header('Location: /php-ninjas');
