<?php

require_once __DIR__ . "/getConnection.php";
require_once __DIR__ . "/model/Comment.php";
require_once __DIR__ . "/Repository/CommentRepository.php";

use Repository\CommentRepositoryImpl;
use Model\Comment;

$connection = getConnection();

$repository = new CommentRepositoryImpl($connection);

$comment = new Comment(email: "repso@email.com", comment: "Hiiii");
$newComment = $repository->insert($comment);

var_dump($newComment->getId());

$connection = null;
