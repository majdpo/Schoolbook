<!--Connection to DB, declaring all important variables, starting a session Part-->     <?php

session_start();

include "script/conectdb.php";

include "templates/header.php";

$id=$_GET['id'];

$sql = "SELECT * FROM post WHERE id = $id";
$sth = $db->prepare($sql);
$sth->execute();

if ($_SESSION['Youlogged'] !== "Hello admin"){
    header("location:index.php");}

?>

<!--Style Part-->                                                                       <style>
  .Font{
      font-family: Arial;
  } td{
      font-family: Arial;
      }
   body{
       background-image: url("icons/anime-1648169181417-8687.jpg");
       background-size: cover;
   }
</style>

<?php include "templates/navbar.php";?>

<!--Table Part-->                                                                       <table class="table">
        <thead>
        <tr class="Font">
            <th>Id</th>

            <th>Auteur</th>

            <th>Title</th>

            <th>Bericht</th>
            <th>Date</th>
            <th>Actions</th>
            <th>Bewerken</th>
            <th>Likes</th>
            <th>Photo</th>
            <th>Add Comment</th>



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
                <td><a href="update/update-post-form.php?id=<?php echo $row["id"]?>" class="btn btn-outline-warning">Update</a></td>
                <td><a href="likes.php?id=<?php echo $row["id"];?>" class="btn btn-outline-dark">  <?php if ($row["likepost"] > 1 || $row["likepost"] < 1){echo $row["likepost"] . " likes";} else { echo $row["likepost"] . " like";}?></td>
                <td><img src="images/<?php echo $row["imageNewName"];?>" height="200px"></td>
                <td><form action="comments.php?id=<?php echo $row["id"];?>" method="post">
                <textarea name="NewComment" class="form-group" rows="2" style="background: transparent; border: solid 1px black"></textarea>
                <td><input type="submit" class="form-group btn btn-outline-success"></td>
                    </form></td>
                <?php } ?>
            </tr>
        </tbody>
    </table>

<!-- Comments Part-->                                                                   <div>
        <div class="dropdown-divider"></div>                                                                <br>
            <h3 style="color: #000000; text-align: center;" class="Font">Comments</h3>
        <div style="margin-right: 20%; margin-left: 20%" class="dropdown-divider"></div><p></p>
        <div style="margin-right: 15%; margin-left: 15%" class="dropdown-divider"></div>                    <br>
</div>

<!--Comments display Part-->                                                            <?php
$sql2 = "SELECT * FROM comments WHERE id = $id";
$sth = $db->prepare($sql2);
$sth->execute();

while ($row = $sth->fetch()) {
    echo "<img src='icons/2495573.png' width='40px' height='40px' style='float: left; margin-right: 10px; margin-bottom: 10px'>
          <form action='delete-comment.php?id={$row['id']}' method='post' style='float: right;'> <input type='hidden' name='DeleteComment' value='{$row['commentnumber']}'>
          <input type='submit' value='Delete Comment' class='btn btn-outline-danger'></form><h4>Admin commented: </h4>" . " 
          <h6 style='color: gray'> {$row['comment']} </h6>" . "<div class='dropdown-divider'></div> "; } ?>

<!--Footer Part-->                                                                      </html>


<!--You have to do js like button, edit system for admin only, HP dropdown menu and design the Comments section!-->