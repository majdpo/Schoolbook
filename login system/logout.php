<?php
//Changing the key word(Hello admin) to anything so you get directed to the index
session_start();
$_SESSION['Youlogged'] = "meow";
header("location:../index.php");