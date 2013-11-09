<?php 
    require("config.php"); 
    unset($_SESSION['user']);
    header("Location: mockup.php"); 
    die("Redirecting to: mockup.php");
?>
