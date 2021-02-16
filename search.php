
<?php include ('inc/header.php') ?>
<?php include ('inc/connection.php'); ?>
    <!-- breadcrumb start -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title">
                        <h2>search</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">search</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb End -->


    <!--section start-->
    <section class="authentication-page">
        <div class="container">
            <section class="search-block">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <form class="form-header">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" aria-label="Amount (to the nearest dollar)"
                                        placeholder="Search Products......">
                                    <div class="input-group-append">
                                        <button name="submit" class="btn btn-solid"><i class="fa fa-search"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- section end -->






    <!-- product section start -->
    <section class="section-b-space ratio_asos">
        <div class="container">
            <div class="row search-product">
            <?php

$query = $_GET['search'];
// gets value sent over search form
$min_length = 2;
// you can set minimum length of the query if you want

if (strlen($query) >= $min_length) {

    $query = htmlspecialchars($query);


    $query = mysqli_real_escape_string($conn, $query);

    $searchTerms = explode(' ', $query);
    
    foreach ($searchTerms as $term) {
        $term = trim($term);
        if (!empty($term)) {
    $raw_results = "SELECT * FROM products 
     WHERE (`pro_name`  LIKE '%$term%')";
            
        }
    }


    $res = mysqli_query($conn, $raw_results);
    if (mysqli_num_rows($res) > 0) {

        while ($results = mysqli_fetch_array($res)) { 
            //  $results = mysqli_fetch_array($raw_results); ?>
                <div class="col-xl-2 col-md-4 col-sm-6">
                    <div class="product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="<?php echo "product-page.php?id={$results['pro_id']}";?>">
                                <img src="<?php echo "admin/{$results['pro_photo']}";?>"
                                        class="img-fluid blur-up lazyload bg-img" alt=""></a>
                            </div>
                            <div class="back">
                                <a href="<?php echo "product-page.php?id={$results['pro_id']}";?>">
                                <?php echo "{$results['pro_name']}";?></a>
                            </div>
                            <div class="cart-info cart-wrap">
                                <button data-toggle="modal" data-target="#addtocart" title="Add to cart">
                                <i
                                        class="ti-shopping-cart"></i></button> </div>
                        </div>
                        <div class="product-detail">
                           
                            <a href="product-page.php">
                                <h6><?php echo "{$results['pro_name']}";?></h6>
                            </a>
                            <h4><?php echo "{$results['pro_price']}";?></h4>
                         
                        </div>
                    </div>
                </div>

 

               <?php } ?>
            </div>
             <?php }}?>
        </div>
    </section>
    
   
    <!-- product section end -->
    <?php include ('inc/footer1.php') ?>