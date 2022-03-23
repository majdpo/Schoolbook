<?php
include "conectdb.php";
include "header.php";

$sql = "SELECT * FROM post";
$sth = $db->prepare($sql);
$sth->execute();
?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Home Page</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Log in<span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <?php include "modal/modal.php"?>
                </li>
                <li class="nav-item">
                    <?php include "modal2/modal2.php";?>
                </li>
            </ul>
        </div>

    </nav>
        <!--
    <div class="pos-f-t">
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
            <h4 class="text-white"><a href="index.php" style="text-decoration: none;" class="text-white">Home Page</a></h4><br>
            <span class="text-muted"> <a class="navbar-brand btn-outline-light btn" href="login.php" >❂ Inloggen</a></span>
            <br><br>
            <span class="text-muted"></span>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
</div>
-->

    <table class="table">
    <thead>
<tr>
   <!-- <th>Id</th>-->

    <th>Auteur</th>

    <th>Title</th>

    <th>Date</th>

    <th>Likes</th>

    <th>Photo</th>
</tr>
    </thead>
        <tbody>
        <?php while($row = $sth->fetch()) { ?>
        <tr>
            <!--<td><?php // echo $row["id"]; ?></td>-->
            <td><a href="post-show.php?id=<?php echo $row["id"]?>" class="text-dark font-weight-bold" ><?php echo $row["auteur"]; ?></a></td>
            <td><?php echo $row["title"]; ?></td>
            <td><?php echo $row["datepost"]; ?></td>
            <?php if ($row["likepost"] > 1 || $row["likepost"] < 1){
                echo "<td> " . $row["likepost"] . " likes </td>";
            } else {
                echo "<td> " . $row["likepost"] . " like </td>";
            }?>
            <td><img src="images/<?php echo $row["imageNewName"];?>" height="120px" width="213px" class="rounded" style="border: solid 1px black"></td>
            <?php } ?>
        </tbody>
    </table>



<?php include "footer.php";