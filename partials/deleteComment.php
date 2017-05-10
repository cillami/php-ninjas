<?php
include 'error.php';
include 'database.php';
include 'comment.php';

$deleteComment = new Comment($pdo);
$delComms = $deleteComment->deleteCommentByCommentId();