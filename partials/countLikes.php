<?php
include "error.php";
include "database.php";
include "post.php";

$countLike = new Post($pdo);
$countLike->countLikesOnPostId();

 
