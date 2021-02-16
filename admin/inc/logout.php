<?php
// Initialize the admin session
session_start();
// Unset all of the admin session variables
unset($_SESSION['superadmin']);
unset($_SESSION['admin']);
// Redirect to admin login page
header("location:../login.php");
exit;
?>