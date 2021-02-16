<?php
if(!isset($_SESSION)) 
    {
    session_start();
}
?>
<?php include('inc/connection.php'); ?>
<?php include ('inc/header.php') ?>
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>cart</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table cart-table table-responsive-xs">
                        <thead>
                            <tr class="table-head">
                            <th scope="col">product image</th>
                                <th scope="col">product name</th>
                                <th scope="col">price</th>
                                <th scope="col">total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            if(isset($_GET['cart_id'])){
                            $sql  = "SELECT * FROM products WHERE pro_id = {$_GET['cart_id']}";
                            $products = mysqli_query($conn, $sql);
                            while ($pro = mysqli_fetch_assoc($products)){
                            echo "
                            <tr>
                                <td><img src='./admin/{$pro['pro_photo']}' width='120' height='170'></img></td>
                                <td><a href='#'>{$pro['pro_name']}</a>
                                </td>
                                <td>
                                            <h2 class='td-color'>{$pro['pro_price']}</h2>
                                </td>
                            </tr>
                            ";

                            }
                        } else {
                            echo "
                            <tr>
                                <td></td>
                                <td><a href='#'></a>
                                </td>
                                <td>
                                            <h2 class='td-color'></h2>
                                </td>
                            </tr>
                            ";
                        }
?>
                        </tbody>
                    </table>
                    <table class="table cart-table table-responsive-md">
                        <tfoot>
                            <tr>
                                <td>total price :</td>
                                <td>
                                    <h2><?php 
                                    if(isset($_GET['cart_id'])){
                                    $sql  = "SELECT * FROM products WHERE pro_id = {$_GET['cart_id']}";
                                    $products = mysqli_query($conn, $sql);
                                    while ($pro = mysqli_fetch_assoc($products)){ echo "{$pro['pro_price']}";
                                }}else{
                                    echo "";
                                }
                            ?></h2>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row cart-buttons">
                <div class="col-6"><a href="category-page.php" class="btn btn-solid">continue shopping</a></div>
                <div class="col-6"><a href="checkout.php" class="btn btn-solid">check out</a></div>
            </div>
        </div>
    </section>
    <!--section end-->
    <?php include ('inc/footer1.php') ?>