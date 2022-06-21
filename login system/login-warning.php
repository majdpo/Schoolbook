<?php

//if the username and password were admin and majd the Session variable
//will change to be Hello admin which is the key to unlock all other pages
//if it wasn't admin and majd you will be directed to the error page where
//you should refill the correct info.
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password =="majd") {
    $_SESSION['Youlogged'] = "Hello $username";
    header("location:../main-page.php");
} else{
    header("location:login-error.php");
}

