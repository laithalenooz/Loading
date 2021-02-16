<?php include 'inc/connection.php'; ?>
<?php 
$query = "delete from users where id = {$_GET['id']}";

mysqli_query($conn, $query);

header("location:user-list.php");

?>