<?php
session_start();

?><!doctype html>
<head>
    <title>Log In</title>
</head>

<link rel="stylesheet" href="css/stylesheet.css">
<link rel="stylesheet" href="css/bootstrap.css">

<body>

        <div class="myloginform border-dark ">
            <h3>Log In Form</h3>

            <form action="login system/login-warning.php" method="post">
            <label for="loginname">User Name</label>
            <input type="text" required placeholder="Username" id="loginname" name="username">
            <label for="loginpassword">Password</label>
            <input type="password" required id="loginpassword" name="password" placeholder="Password">
            <input type="submit" class="btn" id="loginsubmit" value="Log in">
        </form>
            <p style="text-align: center">You can browse the images without logging in!</p>
            <a href="browse.php" id="Browse-btn">Browse</a>
        </div>
</body>
</html>
