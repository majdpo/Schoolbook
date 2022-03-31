<?php
session_start();
$_SESSION['Youlogged'] = "meow";
header("location:../index.php");