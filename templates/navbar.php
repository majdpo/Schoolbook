

<script> function ChangeSession(){ window.location.href = "login system/logout.php";}  </script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="main-page.php">Home Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <?php include "modal/modal.php"?>
            </li>
            <li class="nav-item">
                <?php include "modal2/modal2.php";?>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" style="color: white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Options
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <button onclick="ChangeSession()" class=" btn btn-outline-danger" style="margin-left:23.5%">Log Out</button>
                </div>
            </li>
        </ul>
    </div>

</nav>