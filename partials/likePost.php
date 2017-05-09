<?php
include "error.php";
include "database.php";
include "post.php";

$likePost = new Post($pdo);
$likePost->likePost();
