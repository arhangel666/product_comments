<?php
require_once 'config.php';
$id = $_POST['id'];
$appraisal = $_POST['appraisal'];
$name = $_POST['name'];
$comment = $_POST['comment'];
$data = date("F j, Y, g:i a");

$link->query("INSERT INTO comments (name_user,appraisal,comment,data_create,k) VALUES ('$name','$appraisal','$comment','$data','$id')");

header("Location: comments.php?id=$id");

?>