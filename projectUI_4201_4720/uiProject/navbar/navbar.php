<?php
session_start();
// unset($_SESSION['username']);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../navbar/navbar.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar">
        <div class="brand-title">Brand Name</div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <?php if(isset($_SESSION['username'])) {print '<li><a href="../contact/contact.html">'.$_SESSION['username'].'</a></li>';}?>
                <?php if(!isset($_SESSION['username'])) {print '<li><a href="../login2/login2.html">Login</a></li>';}?>
                <?php if(isset($_SESSION['username'])) {print '<li><form method="post" href="../uiProject/logout.php"><a href="../logout.php">Logout</a></form></li>';}?>
                <?php if(isset($_SESSION['username'])) {print '<li><form method="post" href="../myorders/myorders.php"><a href="../myorders/myorders.php">My Orders</a></form></li>';}?>
                <li><a href="../welcomepage/welcome.html">Home</a></li>
                <li><a href="../signup/signup2.html">Sign Up</a></li>
                <li><a href="#">About</a></li>
                <li><a href="../contact/contact.html">Contact Us</a></li>
            </ul>
        </div>

    </nav>
</body>
<script src="../navbar/navbar.js"></script>

</html>