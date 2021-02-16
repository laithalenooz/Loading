<?php
function redirect($location){
    header("location: $location");
}
function query($sql){
    global $conn;
    return mysqli_query($conn, $sql);
}
?>