<?php

$id = empty($_GET["id"]) ? null : $_GET["id"];



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
<style> body{
        background-image: url("../icons/anime-1648169181417-8687.jpg");
        background-size: cover;
    }
#my-div{
    margin-left: 20%;
    margin-right: 20%;
    border: solid 2px black;
    padding: 20px;
    margin-top: 2%;
    font-size: 20px;
}
#my-div input, textarea{
    font-family: Arial;

}
#my-h3{
    text-align: center;
    margin-top: 5%;
    font-family: "Times New Roman";
}
#MySubmit{
    padding: 0.2rem;
    display: block;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    font-size: 20px;
    border-radius: 10px;
}
</style>

<?php  $title = $auteur = $bericht = "";

if (!empty($post)) {

    $title = $post["title"];

    $auteur = $post["auteur"];

    $bericht = $post["bericht"];
}
?>

<h3 id="my-h3">Update Form</h3>
<form action="update-post.php?id=<?php echo $id;?>" method="post">
    <div id="my-div">
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="auteur">Auteur</label>
            <input type="text" name="auteur" class="form-control" id="auteur" value="<?php echo $auteur;?>" placeholder="Auteur">
        </div>
        <div class="form-group col-md-6">
            <label for="Title">Title</label>
            <input type="text" name="title" class="form-control" id="Title" value="<?php echo $title;?>" placeholder="Title">
        </div>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Bericht</label>
        <textarea class="form-control" name="bericht" id="exampleFormControlTextarea1" rows="3"> <?php echo $bericht;?></textarea>
    </div>

        <input id="MySubmit" class="btn-outline-warning btn" type="submit" value="submit">
    </div>
</form>
</body>
</html>
