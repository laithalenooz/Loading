<?php include 'inc/connection.php'; ?>
<?php 
$query = "delete from admins where admin_id = {$_GET['id']}";

mysqli_query($conn, $query);

header("location:admin_list.php");

$delete = "The account has been Deleted";

?>
