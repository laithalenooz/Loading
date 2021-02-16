<?php
session_start();

include_once 'inc/connection.php'; ?>


<?php 

if((isset($_SESSION['superadmin'])) || (isset($_SESSION['admin'])) ){
   
?>
<?php

include ('inc/connection.php');


if(isset($_POST['submit'])){
    
$fName     = $_POST['firstName'];
$lName     = $_POST['lastName'];
$email     = $_POST['email'];
$password  = $_POST['password'];



$query = "update users set firstname = '$fName',
                            lastname  = '$lName',
                            email     = '$email',
                            password  = '$password '
                            where id  = {$_GET['id']}";
       
mysqli_query($conn, $query);
header("location:user-list.php");

}
$query  = "select * from users where id = {$_GET['id']}";
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
                    <h3>Edit User</h3>  
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">User </li>
                    <li class="breadcrumb-item active">Update User  </li>
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
                    <h5> Edit User</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Account</a></li>
                    
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <form class="needs-validation user-add" action="" method="post" >
                                <h4>Account Details</h4>
                                <div class="form-group row">
                                    <label for="validationCustom0" class="col-xl-3 col-md-4"><span>*</span> First Name</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom0" type="text" name="firstName" value="<?php echo $row['firstname'] ?>" required="" >
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom1" class="col-xl-3 col-md-4"><span>*</span> Last Name</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom1"  value="<?php echo $row['lastname'] ?>" name="lastName" type="text"  required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom2" class="col-xl-3 col-md-4"><span>*</span> Email</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom2"  value="<?php echo $row['email'] ?>" name="email" type="text" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom3" class="col-xl-3 col-md-4"><span>*</span> Password</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom3"  value="<?php echo $row['password'] ?>" name="password" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Confirm Password</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="confirm_Password" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> ID</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="id"  type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span>Type</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="type" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span>Adress</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="adress" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Contact info</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="contact_info" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Photo</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="photo" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span>Status</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="status" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span>Activate code</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="photo" type="activate code" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Reset Code</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="reset_code" type="password" required="">
                                </div>
                                <div class="form-group row">
                                    <label for="validationCustom4" class="col-xl-3 col-md-4"><span>*</span> Created on</label>
                                    <input class="form-control col-xl-8 col-md-7" id="validationCustom4"  name="created_on" type="password" required="">
                                </div>
                                
                                <div class="row justify-content-end col-12 mr-5 mb-2">
                        <button  type="submit" name="submit" class="btn btn-primary">Update</button>
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