<?php
session_start();

include_once 'inc/connection.php'; ?>


<?php 

if((isset($_SESSION['superadmin'])) || (isset($_SESSION['admin'])) ){
   
?>
<?php

// make the action when user click on Save Button
if(isset($_POST['submit'])){
    
    // // get image data
    $image_name = $_FILES['cat_image']['name'];
    $tmp_name   = $_FILES['cat_image']['tmp_name'];
    $path       = 'images/admin_images/';
    
    // // move image to folder
    move_uploaded_file($tmp_name,$path.$image_name);


    $name=$_POST['cat_name'];

    $query = "insert into categories (name, cat_image)
              values('$name','$path$image_name')";
       
    mysqli_query($conn,$query);
    
}

   ?>

<?php include ('inc/header.php') ?>

<div class="page-body">
    <div class="container-fluid">
 
<div class="row m-t-30">
            <div class="col-md-12">
                                 <!-- DATA TABLE-->
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                        <thead>
                                            <tr>
                                                <th>Category ID</th>
                                                <th>Category Name</th>
                                                <th>Category Image</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                            <tbody>
                            <?php
                            $query  = "select * from categories";
                            $result = mysqli_query($conn,$query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>{$row['category_id']}</td>";
                                echo "<td>{$row['name']}</td>";
                                echo "<td><img src='{$row['cat_image']}' width='140' height='160'></td>";
                                echo "<td><a href='edit_category.php?id={$row['category_id']}' class='btn btn-primary'>Edit</a></td>";
                                echo "<td><a href='delete_category.php?id={$row['category_id']}' class='btn btn-danger'>Delete</a></td>";
                                echo "</tr>";
                            }

                             ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE-->
                </div>
  </div>

</div>
</div>

<?php include ('inc/footer.php') ?>

<?php
}else{
    header('location:../index.php');
}
?>