<?php
session_start();

include_once 'inc/connection.php'; ?>


<?php 

if((isset($_SESSION['superadmin'])) || (isset($_SESSION['admin'])) ){
   
?>
<?php
 if(isset($_POST['submit'])){

    
    $imageName = $_FILES['proPhoto']['name'];
    $tmpName   = $_FILES['proPhoto']['tmp_name'];
    $path      = 'images/proimages/';
    
    move_uploaded_file($tmpName, $path.$imageName);
    
 $proName              = $_POST['proName'];
 $proDescription       = $_POST['proDescription'];
 $proPrice             = $_POST['proPrisce'];
 $catid                = $_POST['category'];


 
 $query = "insert into products(pro_name, pro_description, pro_price, pro_photo,category_id) 
           values ('$proName','$proDescription','$proPrice', '$path$imageName','$catid')";
           
 mysqli_query($conn, $query);
 $sucss = "The product has been created";
 
}

?>
<?php include ('inc/header.php'); ?>
<div class="page-body">
    
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Create Product</h3>  
                   
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Create Product </li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5> Create Product</h5>
                    <br>
                    <h5 class="'alert alert-success'"><?php if(isset($sucss)){echo "<div class='alert alert-success'> $sucss</div>";}?></h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Product</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <form class="needs-validation user-add" action="" method="post"  enctype="multipart/form-data">
                                <h4>Account Details</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span>Product Name</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="proName" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span>Product Description</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom2" name="proDescription" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Product price</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom2"  type="text" name="proPrisce" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Product photo</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom2" name="proPhoto" type="file" name="proPhoto" required="">
                                </div>
                                <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Category</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="category" id="select" class="form-control">
                                            <?php
                                                $query  = "select * from categories";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $idc = $row['category_id'];
                                                    $catname = $row['name'];
                                                    echo "<option value='$idc'>$catname</option>";
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                <div class="row justify-content-end col-12 mr-5 mb-2">
                        <button  type="submit" name="submit" class="btn btn-primary">Create</button>
                    </div>
                            </form>
                        </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
</div>
<?php include ('inc/footer.php') ?>

<?php
}else{
    header('location:../index.php');
}
?>