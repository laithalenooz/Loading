<?php include 'inc/connection.php'; ?>
<?php 
$query = "delete from products where pro_id = {$_GET['id']}";

mysqli_query($conn, $query);

header("location:admin_prudact_list.php");

?>
