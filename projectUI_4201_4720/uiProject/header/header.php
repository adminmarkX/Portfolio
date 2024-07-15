<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.bundle.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.min.css">


</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="homepage.php"> <img class="d-inline-block align-top" src="./assets/airL.png" width="100" height="50" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Travel Packages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <a class="nav-link" id="log" href="login.php">Login</a>
                    <a class="nav-link" id="out" href="#">Log out</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                </div>
            </div>
        </nav>
    </header>
</body>