 <!-- PHP code to make a connection with my database. Include the navbar and the header. Selecting all items to display. Session or in other words login confirmation-->
 <?php
session_start();
include "script/conectdb.php";

include "templates/header.php";

$sql = "SELECT * FROM post";
$sth = $db->prepare($sql);
$sth->execute();

if ($_SESSION['Youlogged'] !== "Hello admin"){
    header("location:index.php");
}
include "templates/navbar.php";
?>

<!-- Table to display the posts with its like, date, creator and title -->
<table class="table">
    <thead>
    <tr>
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
        <td><a href="post-show.php?id=<?php echo $row["id"]?>" class="text-dark font-weight-bold" ><?php echo $row["auteur"]; ?></a></td>

        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["datepost"]; ?></td>
        <?php if ($row["likepost"] > 1 || $row["likepost"] < 1){
            echo "<td> ❤ " . $row["likepost"] . " likes </td>";
        } else {
            echo "<td> ❤ " . $row["likepost"] . " like </td>";
        }?>
        <td><img src="images/<?php echo $row["imageNewName"];?>" height="120px" width="213px" class="rounded" style="border: solid 1px black" alt="#"></td>
        <?php } ?>
    </tbody>
</table>

</html>


