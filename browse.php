<?php
//If someone doesn't have an account he can only browse the posts
//If the admin is the one who is checking the browse menu then he
//will have the same navbar as the homepage

session_start();
include "script/conectdb.php";
$sql = "SELECT * FROM post";
$sth = $db->prepare($sql);
$sth->execute();
if(!empty($_SESSION["Youlogged"])) {
    if ($_SESSION['Youlogged'] == "Hello admin") {
        include "templates/navbar.php";
    }
}
include "templates/header.php";
?>
<body style="background-image: url('icons/4669215.jpg'); background-size: cover">
    <?php while($row = $sth->fetch()) { ?>
    <div style="display: flex;align-content: space-between; padding: 75px">
        <div class="card mb-3" style="width: 60%; text-align: center; margin-left: auto; margin-right: auto">
            <img class="card-img-top" src="images/<?php echo $row['imageNewName'];?>" alt="<?php echo $row['imageNewName'];?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['title'];?></h5>
                <p class="card-text"><?php echo $row['bericht'];?></p>
            </div>
        </div>
    </div>
    <?php } ?>


</body>
</html>
