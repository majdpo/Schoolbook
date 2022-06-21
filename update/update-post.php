<?php
//Updating the post section
include "../script/conectdb.php";
$id=$_GET['id'];
$auteur=$_POST['auteur'];
$title=$_POST['title'];
$bericht= $_POST['bericht'];


$sql= "UPDATE post SET auteur = :auteur, title = :title, bericht = :bericht WHERE id = :id";
$sth= $db->prepare($sql);
$sth->execute([
    ':id'=> $id,
    ':auteur' => $auteur,
    ':title' => $title,
    ':bericht' => $bericht]);

$thepostpage= "../post-show.php?id=$id";

header("location:$thepostpage");