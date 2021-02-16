<?php
session_start();

include_once 'inc/connection.php'; ?>


<?php 

if((isset($_SESSION['superadmin'])) || (isset($_SESSION['admin'])) ){
   
?>
<?php include ('inc/header.php') ?>

<div class="page-body">

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Massage</h3>  
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Massage</li>
                    <li class="breadcrumb-item active">Massage List </li>
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
                    <h5>Massage List</h5>
                    <br>
                    <h5 class="text-success"><?php if(isset($delete )){echo $delete;}?></h5>                    
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">Massages</a></li>

                        <div class="page-body">
    <div class="container-fluid">
    
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>User ID</th>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Massage</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $query     = "select * from contact";  
                                            $result    = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result)){

                                                echo "<tr>";
                                                echo "<td> {$row['id']}</td>";
                                                echo "<td> {$row['fname']}</td>";
                                                echo "<td> {$row['lname']}</td>";
                                                echo "<td> {$row['phone']}</td>";
                                                echo "<td> {$row['email']}</td>";
                                                echo "<td> {$row['msg']}</td>";
                                                echo "<td> <a href='delete_admin.php?id={$row['admin_id']}' class = 'btn btn-danger'> Delete</a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                            
                            </div>
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