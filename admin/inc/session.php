<?php
// admin session
    session_start();
    if(!isset($_SESSION['adminLogin'])){
        $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
        header("location:login.php");
    }
?>