<?php
    if(!isset($_SESSION)) 
    {
    session_start();
    if(!isset($_SESSION['loggedin'])){
        $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
        header("location:login.php");
    }
}
    
?>