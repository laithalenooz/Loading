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
                    <h3>Product List</h3>  
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Product</li>
                    <li class="breadcrumb-item active">Product List</li>
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
                    <h5>Product List</h5>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs tab-coupon" id="myTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active show" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="true" data-original-title="" title="">List</a></li> 
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="account" role="tabpanel" aria-labelledby="account-tab">
                           


                        <div class="page-body">
    <div class="container-fluid">
    
                        <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Product Description</th>
                                                <th>Product price</th>
                                                <th>Product photo</th>
                                                <th>Category Id</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $query     = "select * from products";  
                                            $result    = mysqli_query($conn,$query);
                                            while($row = mysqli_fetch_assoc($result)){

                                                echo "<tr>";
                                                echo "<td> {$row['pro_id']}         </td>";
                                                echo "<td> {$row['pro_name']}       </td>";
                                                echo "<td> {$row['pro_description']}</td>";
                                                echo "<td> {$row['pro_price']}      </td>";
                                                echo "<td><img src ='{$row['pro_photo']}' width='100' height = '130' ></td>";

                                                echo "<td> {$row['category_id']}</td>";


                                                echo "<td> <a href='edit_product.php?id={$row['pro_id']}' class = 'btn btn-primary'> Edit</a></td>";
                                                echo "<td> <a href='delete_product.php?id={$row['pro_id']}' class = 'btn btn-danger'> Delete</a></td>";
                                                echo "</tr>";
                                            }
                                            
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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