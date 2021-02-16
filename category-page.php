<?php
if(!isset($_SESSION)) 
    {
    session_start();
}
?>
<?php include ('inc/connection.php'); ?>
<?php include ('inc/header.php') ?>

    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>Category</h2>
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

    <!-- section start -->
<section class="game-product ratio_asos pt-0">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 collection-filter">
        <!-- side-bar colleps block stat -->
                <div class="collection-filter-block">
            <!-- brand filter start -->
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                        <div class="collection-collapse-block open">
                            <h3 class="collapse-block-title">Categories</h3>
                            <div class="collection-collapse-block-content">
                                <div class="collection-brand-filter">
                                    <?php
                                    // print out categories based on db entered categories
                                    $query2  = "SELECT * FROM categories";
                                    $result2 = mysqli_query($conn, $query2);
                                    while ($row2 = mysqli_fetch_assoc($result2)) {
                                    echo
                                    "<div class='custom-control custom-checkbox collection-filter-checkbox'>
                                        <a href='category-page.php?id={$row2['category_id']}' class='text-danger'>{$row2['name']}</a>
                                    </div>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-- silde-bar colleps block end here -->
                        
                    </div>
                    <div class="col">
                        <div class="theme-tab">
                            <div class="tab-content-cls">
                                <div id="tab-4" class="tab-content active default">
                                    <div class=" no-slider five-product row">
                                    <?php
                                    
                                    if(isset($_GET['id'])){
                                    // add dynamic products based on selected category
                                    $sql  = "SELECT * FROM products WHERE category_id = {$_GET['id']}";
                                    $products = mysqli_query($conn, $sql);
                                    while ($pro = mysqli_fetch_assoc($products)) {
                                    echo "
                                    <div class='product-box'>
                                        <div class='img-wrapper'>
                                            <div class='front'>
                                                <a href='product-page.php?id={$pro['pro_id']}'><img src='./admin/{$pro['pro_photo']}' class='img-fluid bg-img blur-up lazyload' alt=''></a>
                                            </div>
                                                <div class='add-button text-white' data-toggle='modal' data-target='#addtocart'><a class='text-white' href='cart.php?id={$pro['category_id']}&cart_id={$pro['pro_id']}'>add to cart</a></div>
                                            </div>
                                                <div class='product-detail'>
                                                    <a href='product-page.php?id={$pro['pro_id']}'>
                                                    <h6>{$pro['pro_name']}</h6>
                                                    </a>
                                                    <h4>{$pro['pro_price']}</h4>
                                                </div>
                                    </div>" ;
                                        }
                                    } else{
                                        // add dynamic products
                                        $sql  = "SELECT * FROM products";
                                        $products = mysqli_query($conn, $sql);
                                        while ($pro = mysqli_fetch_assoc($products)) {
                                        echo "
                                        <div class='product-box'>
                                    <div class='img-wrapper'>
                                        <div class='front'>
                                            <a href='product-page.php?id={$pro['pro_id']}'><img
                                                src='./admin/{$pro['pro_photo']}'
                                            class='img-fluid bg-img blur-up lazyload' alt=''></a>
                                        </div>
                                        <div class='add-button text-white' data-toggle='modal' data-target='#addtocart'><a class='text-white' href='cart.php?id={$pro['category_id']}&cart_id={$pro['pro_id']}'>add to
                                            cart</a></div>
                                    </div>
                                    <div class='product-detail'>
                                        <a href='product-page.php?id={$pro['pro_id']}'>
                                        <h6>{$pro['pro_name']}</h6>
                                        </a>
                                        <h4>{$pro['pro_price']}</h4>
                                    </div>
                                    </div>" ;
                                        }
                                    }
                                    
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- section End -->
    <?php include ('inc/footer.php') ?>