<?php

include "error.php";
include "database.php";

var_dump($_POST);

$statement = $pdo->prepare("
  INSERT INTO post (title, img, blogText)
  VALUES (:title, :img, :blogText)");

//Execute statement, fetch data
$statement->execute([
  ":title" => $_POST['title'],
  ":img" => $_POST['img'],
  ":blogText" => $_POST['blogText']
]);


