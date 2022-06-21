<?php

include "script/conectdb.php";
//no need to explain xD

$id = $_GET['id'];


$sql = "DELETE FROM post WHERE id = :id ";
$deletecomments = "DELETE FROM comments WHERE id= :id";

$sth = $db->prepare($sql);
$sth2 = $db->prepare($deletecomments);
$sth->execute(
    [':id' => $id]);
$sth2->execute(
    [':id' => $id]);

header("location:main-page.php");
