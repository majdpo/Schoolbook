<?php
$id =$_GET["id"];



include "../script/conectdb.php";

$sql = "SELECT * FROM post WHERE id=:id";



$params = array(

"id" => $id

);



try {

$sth = $db->prepare($sql);

$sth->execute($params);

$post = $sth->fetch(PDO::FETCH_ASSOC);

} catch (PDOException $e) {

echo $e->getMessage();

}
include "../templates/header.php";
?>

<?php  $title = $auteur = $bericht = "";

if (!empty($post)) {

    $title = $post["title"];

    $auteur = $post["auteur"];

    $bericht = $post["bericht"];
}
?>