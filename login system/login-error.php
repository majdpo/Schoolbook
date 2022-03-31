<?php
session_start();
?>
<script>
    alert("Your username or password is incorrect!");
</script>

<!doctype html>
<head>
    <title>Log In</title>
</head>
<style>    .myloginform {
        margin:2rem auto;
        max-width: 300px;
        padding: 1rem 2rem;
        display: block;
        margin-top: 15%;
        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
        background-color: rgba(255, 255, 255, 0.2);
        border-radius: 20px;
        font-family:Gabriola;
        font-size: 20px;

    }
    h3{
        text-align: center;
        font-family: -apple-system;
        background: linear-gradient(#8694C8,#000000);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

    }
    input{

        -webkit-backdrop-filter: blur(2px);
        backdrop-filter: blur(2px);
        background-color: rgba(255, 255, 255, 0.2);
        font-family: -apple-system;

    }
    label, input::placeholder{
        background: linear-gradient(#8694C8,#000000);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-family: -apple-system;

    }
    .myloginform label {
        display: block;
        font-family: -apple-system;

    }
    .myloginform input{
        display: block;
        width: 100%;
        border: none;
        font-family: -apple-system;

    }

    #loginsubmit{
        padding: 0.1rem;
        margin: 0.5rem 0;
        display: block;
        width: auto;
        cursor: pointer;
        margin-left: 37%;
        font-family: -apple-system;
        font-size: 20px;


    }
    body {

        background-image: url("../icons/2495573.png");
    }
    #loginsubmit:hover{
        background: #FFFABA;
    }
</style>
<link rel="stylesheet" href="../css/bootstrap.css">
<body>

<div class="myloginform border-dark ">
    <h3>Log In Form</h3>

    <form action="login-warning.php" method="post">
        <label for="loginname">User Name</label>
        <input type="text" placeholder="Username" id="loginname" name="username">
        <label for="loginpassword">Password</label>
        <input type="password" id="loginpassword" name="password" placeholder="Password">
        <input type="submit" class="btn" id="loginsubmit" value="Log in">
    </form>
</div>
</body>
</html>