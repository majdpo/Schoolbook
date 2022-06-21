<?php

//Deleting comment with the number it has.
include "script/conectdb.php";

$commentnumber=$_POST['DeleteComment'];

$id = $_GET['id'];
$sql = "DELETE FROM comments WHERE commentnumber = :commentnumber";
$sth = $db->prepare($sql);
$sth->execute([':commentnumber' => $commentnumber]);

$thepostpage= "post-show.php?id=$id";

header("location: $thepostpage ");