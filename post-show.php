<?php
include "conectdb.php";
include "header.php";
$id=$_GET['id'];
$sql = "SELECT * FROM post WHERE id = $id";
$sth = $db->prepare($sql);
$sth->execute();


?>


<nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
        <img src="icons/website-icon-21.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Home Page
    </a>
</nav>
    <table class="table">
        <thead>
        <tr>
            <th>Id</th>

            <th>Auteur</th>

            <th>Title</th>

            <th>Bericht</th>
            <th>Date</th>
            <th>Actions</th>
            <th>Likes</th>
            <th>Photo</th>



        </tr>
        </thead>
        <tbody>
        <?php while($row = $sth->fetch()) { ?>
            <tr>

                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["auteur"]; ?></td>
                <td><?php echo $row["title"]; ?></td>
                <td><?php echo $row["bericht"]; ?></td>
                <td><?php echo $row["datepost"]; ?></td>
                <td><a href="delete-post.php?id=<?php echo $row["id"];?>" class="btn btn-outline-danger">Delete</a></td>

                <td><button onclick="meow()" class="btn btn-outline-dark"><span id="postlikejs">Like</span></button></td>

                <td><img src="images/<?php echo $row["imageNewName"];?>" height="200px"></td>

                <script>
                    let postlike = 0;
                    function meow(){
                        postlike++
                        if (postlike < 2){
                            document.getElementById("postlikejs").innerHTML = postlike + " like";
                        } else {
                            document.getElementById("postlikejs").innerHTML = postlike + " likes";
                            <?php $countlike = postlike;?>}
                </script>
                //you were working on letting the postlike variable switch between js and php so that php send the new count of postlike to the db

                <!-- <td><a href="likes.php?id=<?php echo $row["id"];?>" class="btn btn-outline-dark">  <?php if ($row["likepost"] > 1 || $row["likepost"] < 1){echo $row["likepost"] . " likes";} else { echo $row["likepost"] . " like";}?></td>-->
                <?php } ?>

                <?php
                $postlikesphp = $countlike;
                $sql= "UPDATE post SET likepost = :likepost WHERE id= :id";

                $sth= $db->prepare($sql);
                $sth->execute([
                    ':id'=> $id,
                    ':likepost'=> $postlikesphp
                ]);
                ?>
                }
        </tbody>
    </table>
