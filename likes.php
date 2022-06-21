<?php
include "script/conectdb.php";
//every time someone hit the like button he will be directed here and then get redirected to the post page itself
$id=$_GET['id'];
$sql = "SELECT * FROM post WHERE id = $id";
$sth = $db->prepare($sql);
$sth->execute();
while ($row = $sth->fetch()) {
    $likepost= $row['likepost'];
    $likepost++;
}

$sql= "UPDATE post SET likepost = :likepost WHERE id= :id";

$sth= $db->prepare($sql);
$sth->execute([
    ':id'=> $id,
    ':likepost'=> $likepost
]);

$thepostpage= "post-show.php?id=$id";

header("location: $thepostpage ");