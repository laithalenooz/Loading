<?php 
session_start();
include 'inc/connection.php'; ?>
<?php
if(isset($_POST['submit'])){
    $Email    = $_POST['email'];
    $Password = $_POST['password'];
if(!empty($Email) && !empty($Password)){
    $query  = "select * from users where email = '$Email' AND password = '$Password'";
    $result =  mysqli_query($conn, $query);
    $row    = mysqli_fetch_assoc($result);
if(!empty ($row)){
    $_SESSION['loggedin'] = true;
        header("location:index.php");
}else{
    header('location:./login.php');
    $error ="User Not Found !!!";
}
   }else{header('location:./login.php');
    echo 2222;die;
       $error = "Email and Password are Required";}
}
?>