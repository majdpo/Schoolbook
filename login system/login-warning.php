<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "admin" && $password =="majd") {
    $_SESSION['Youlogged'] = "Hello $username";
    header("location:../main-page.php");
} else{
    header("location:login-error.php");
}

