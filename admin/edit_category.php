<?php
session_start();

include_once 'inc/connection.php'; ?>


<?php 

if((isset($_SESSION['superadmin'])) || (isset($_SESSION['admin'])) ){
   
?>
<?php

 if(isset($_POST['submit_add'])){
    
    $imageName = $_FILES['cat_image']['name'];
    $tmpName   = $_FILES['cat_image']['tmp_name'];
    $path      = 'images/admin_images/';
    

    move_uploaded_file($tmpName, $path.$imageName);
                                                  
    
    $name=$_POST['cat_name'];       
 
 $query = "update categories set name        = '$name', 
                             cat_image       = '$path$imageName'  
                             where category_id    = {$_GET['id']}";
           
 mysqli_query($conn, $query);
 header("location:manage_category.php");
 
}
$query  = "select * from categories where category_id = {$_GET['id']}";
$result = mysqli_query($conn, $query);
$row    = mysqli_fetch_assoc($result);

?>

<?php include ('inc/header.php') ?>

        <div class="page-body">

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Category
                                    
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                
                                <li class="breadcrumb-item active">Category</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

       
            <!-- Container-fluid Ends-->
            <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Update Category</h5>
                </div>
                
                <form class="needs-validation" action="" method="post" enctype="multipart/form-data" >
                                            <div class="form">
                                                <div class="form-group col-md-12">
                                                    <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                    <input class="form-control" id="validationCustom01" type="text" name="cat_name" value="<?php echo $row['name'] ?>" value="">
                                                </div>

                                                <?php echo "<td><img src='{$row['cat_image']}' width='140' height='80' class = 'ml-3'></td>";?>

                                                <div class="form-group col-md-12">
                                                    <label for="validationCustom02" class="mb-1">Category Image :</label>
                                                    <input class="form-control" id="validationCustom02" type="file" name="cat_image">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end col-12 mr-5 mb-2">
                                        <input class="btn btn-primary" type="submit" name="submit_add" placeholder="" value="Update ">
                                       
                                    </div>
                </form>
                  
                    <div class="table-responsive">
                        <div id="basicScenario" class="product-physical">
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

        <?php include ('inc/footer.php') ?>
        
<?php
}else{
    header('location:../index.php');
}
?>