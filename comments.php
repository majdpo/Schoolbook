<?php

//inserting comment with it's id as it's primary key
include "script/conectdb.php";
$id = $_GET['id'];
$comment = $_POST['NewComment'];

$thepostpage = "post-show.php?id=$id";

if (empty($comment)){
    header("location:$thepostpage");
} elseif (!empty($comment)) {
    $sql= "INSERT INTO  comments (comment, id) VALUE(?,?)";
    $sth= $db->prepare($sql);
    $sth->execute([$comment, $id]);
    header("location:$thepostpage");
}
