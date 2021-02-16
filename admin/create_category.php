<?php
session_start();

include_once 'inc/connection.php'; ?>


<?php 

if((isset($_SESSION['superadmin'])) || (isset($_SESSION['admin'])) ){
   
?>
<?php

// make the action when user click on Save Button
if(isset($_POST['submit_add'])){


    // get image data
    $image_name = $_FILES['cat_image']['name'];
    $tmp_name   = $_FILES['cat_image']['tmp_name'];
    $path       = 'images/admin_images/';
    
    // move image to folder
    move_uploaded_file($tmp_name,$path.$image_name);
     
  
  
      // Take Data From Web Form 
      // $email    = $_POST['admin_email'];
      // $password = $_POST['admin_password'];
      // $fullname = $_POST['admin_fullname'];
  
      $name=$_POST['cat_name'];
  
      $query = "insert into categories (name,cat_image  )
                values('$name','$path$image_name')";
         
      mysqli_query($conn,$query);
      header("location:manage_category.php");
}
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
                                    <small>Multikart Admin panel</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Physical</li>
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
                    <h5>Products Category</h5>
                </div>
                
                <form class="needs-validation" action="" method="post" enctype="multipart/form-data" >
                                            <div class="form">
                                                <div class="form-group col-md-12">
                                                    <label for="validationCustom01" class="mb-1">Category Name :</label>
                                                    <input class="form-control" id="validationCustom01" type="text" name="cat_name"  value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="validationCustom02" class="mb-1">Category Image :</label>
                                                    <input class="form-control" id="validationCustom02" type="file" name="cat_image">
                                                </div>
                                            </div>
                                            <div class="row justify-content-end col-12 mr-5 mb-2">
                                        <input class="btn btn-primary" type="submit" name="submit_add" placeholder="" value="Add Category">
                                        <!-- <button class="btn btn-secondary" type="submit" data-dismiss="modal">Close</button>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block" name="submit">
                                         <span id="payment-button-amount">Create</span> </button> -->
                                    </div>
                                        </form    
                  
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