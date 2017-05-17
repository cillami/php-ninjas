<?php
include "error.php";
include "database.php";
include "post.php";


$deletePost = new Post($pdo);
$deletePost->deletePost();

//header('Location: /php-ninjas/partials/home.php');