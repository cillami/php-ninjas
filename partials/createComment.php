<?php
include "error.php";
include "database.php";
include "comment.php";

$createPost = new Comment($pdo);
$createPost->createComment();

header('Location: /php-ninjas/partials/home.php');