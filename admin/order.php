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
                      <div class="col-lg-12">
                          <div class="page-header-left">
                              <h3>Order list</h3>   
                          </div>
                      </div>
                      <div class="col-lg-12">
                          <ol class="breadcrumb pull-right">
                              <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                              <li class="breadcrumb-item">Order</li>
                              <li class="breadcrumb-item active">Order list </li>
                          </ol>
                      </div>
                  </div>
              </div>

           <!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card tab2-card">
                <div class="card-header">
                    <h5>User List</h5>
                    <br>
                    <h5 class="text-success"></h5>                    
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">List</a></li>

                        <div class="page-body">
    <div class="container-fluid">
    
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                 <!-- DATA TABLE-->
            <div class="table-responsive m-b-40">
                    <table class="table table-borderless table-data3">
                        <thead>
                                    <tr>
                                        <th>Order Id</th>
                                        <th>User ID</th>
                                        <th>Product ID</th>
                                        <th>Payment ID</th>
                                        <th>Date</th>
                                        
                                    </tr>
                      </thead> 
                                    <tbody>
                                    <?php
                                            
                                            $query     = "select * from sales";  
                                            $result    = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result)){

                                                echo "<tr>";
                                                echo "<td> {$row['id']}</td>";
                                                echo "<td> {$row['user_id']}</td>";
                                                echo "<td> {$row['pro_id']}</td>";
                                                echo "<td> {$row['pay_id']}</td>";
                                                echo "<td> {$row['sales_date']}</td>";
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

</div>
                  
  
        <?php include ('inc/footer.php') ?>
        
<?php
}else{
    header('location:../index.php');
}
?>