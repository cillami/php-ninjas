<?php
include "error.php";
include "database.php";
include "post.php";

$deletePost = new Post($pdo);
$deletePost->deletePost();