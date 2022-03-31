<?php
include "script/conectdb.php";
$id=$_GET['id'];
$comment = $_POST['NewComment'];

$sql= "INSERT INTO  comments (comment, id) VALUE(?,?)";
$sth= $db->prepare($sql);
$sth->execute([$comment, $id]);
$thepostpage= "post-show.php?id=$id";

header("location:$thepostpage ");