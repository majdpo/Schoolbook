<?php

include "script/conectdb.php";


$id = $_GET['id'];


$sql = "DELETE FROM post WHERE id = :id";

$sth = $db->prepare($sql);

$sth->execute(
    [':id' => $id]);

header("location:main-page.php");
