<?php
//make database connection
    $conn = new mysqli("localhost","root","","loading1");
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
?>