<?php 
    session_start();
    unset($_SESSION['username']); // logout from 
    session_destroy();
    header("Location: ../uiProject/welcomepage/welcome.html");
?>