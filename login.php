<!doctype html>
<head>
    <title>Document</title>
</head>
<style>
    .myloginform {
        margin:2rem auto;
        border: solid 2px gray;
        max-width: 300px;
        padding: 2rem;
        display: block;

    }
    .myloginform label {
        display: block;
    }
    .myloginform input{
        display: block;
        width: 100%;
    }

    #loginsubmit{
        padding: 0.1rem;
        margin: 1rem 0;
        width: auto;
        cursor: pointer;
    }
</style>
<link rel="stylesheet" href="css/bootstrap.css">
<body>


        <div>
        <form action="index.php" class="myloginform" method="post">
            <label for="loginname">User Name</label>
            <input type="text" placeholder="Username" id="loginname" name="logged">
            <label for="loginpassword">Password</label>
            <input type="password" id="loginpassword" name="password" placeholder="Password">
            <input type="submit" class="btn btn-outline-primary" id="loginsubmit" value="Log in">
        </form>


    </div>
</body>
</html>