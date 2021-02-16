<?php

include_once 'inc/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="LOADING, GAMING, VIDEO GAMES, ONLINE STORE">
    <meta name="author" content="LSL">
    <meta name="keywords" content="VIDEOS GAMES, LOADING STORE, LOADING, GAMES">
    <meta property="og:description" content="LOADING, GAMING, VIDEO GAMES, ONLINE STORE, FREE DELIVERY">
    <meta name=”robots” content=”index, follow”>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Loading">
    <meta name="keywords" content="Loading">
    <meta name="author" content="Loading">
    <link rel="icon" href="./images/favicon/1.png" type="image/x-icon" />
    <link rel="shortcut icon" href="./images/favicon/1.png" type="image/x-icon" />
    <title>Loading - E-commerce</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="./css/fontawesome.css">
	    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="./css/slick.css">
    <link rel="stylesheet" type="text/css" href="./css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="./css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="./css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="./css/color1.css" media="screen" id="color">


</head>

<body>



    <!-- header start -->
    <header class="color-dark">
        <div class="mobile-fix-option"></div>
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact">
                            <ul>
                                <li>Welcome to Our store Loading</li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 078 795 2510</li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4">
                    <div class="form-content">
                    <form class="form-header" method="get" action="./search.php">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="Search Products......">
                                    <div class="input-group-append">
                                        <button name="submit" class="btn btn-solid"><i class="fa fa-search"></i>Search</button>
                                    </div>
                                </div>
                            </form>
                                </div>
                    </div> -->
                    <div class="col-lg-6 text-right">
                        <ul class="header-dropdown">
                            <li class="mobile-wishlist"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i></a>
                            </li>
                            <li class="onhover-dropdown mobile-account">
                                <i class="fa fa-user" aria-hidden="true"></i> My Account
                                <ul class="onhover-show-div">
                                    <li><?php if(isset($_SESSION['loggedin'])){
                                        echo "<a href='profile.php' data-lng='en'>My Account</a>";
                                    } else {
                                        echo "<a href='login.php' data-lng='en'>Login</a>";
                                    }
                                    ?>
                                    </li>
                                    <li><?php if(isset($_SESSION['loggedin'])){
                                        echo "<a href='inc/logout.php' data-lng='en'>Logout</a>";
                                    }
                                    ?></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="main-menu">
                        <div class="menu-left">
                           
                            <div class="brand-logo"><a href="index.php"><img src="./images/icon/logo4.png"
                                        class="img-fluid blur-up lazyload" alt=""></a></div>
                        </div>
                        <div class="menu-right pull-right">
                            <div>
                                <nav id="main-nav">
                                    <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                    <ul id="main-menu" class="sm pixelstrap sm-horizontal">
                                        <li>
                                            <div class="mobile-back text-right">Back<i class="fa fa-angle-right pl-2"
                                                    aria-hidden="true"></i></div>
                                        </li>
                                        <li>
                                            <a href="index.php">Home</a>
                                           
                                        </li>
                                        <li>
                                            <a href="category-page.php">Shop</a>
                                            
                                        </li>

                                        <li>
                                            <a href="cart.php">Cart</a>
         
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div>
                                <div class="icon-nav">
                                    <ul>
                                    
                                        <li class="onhover-div mobile-search">
                                            <div><img src="./images/icon/search.png" onclick="openSearch()"
                                                    class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                                    onclick="openSearch()"></i></div>
                                            <div id="search-overlay" class="search-overlay">
                                                <div>
                                                    <span class="closebtn" onclick="closeSearch()"
                                                        title="Close Overlay">×</span>
                                                    <div class="overlay-content">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-xl-12">
                                                                    <form  method="get" action="./search.php">
                                                                        <div class="form-group"><input type="text"
                                                                                class="form-control"
                                                                                name="search"
                                                                                id="exampleInputPassword1"
                                                                                placeholder="Search a Product"></div>
                                                                        <button type="submit" class="btn btn-primary"><i
                                                                                class="fa fa-search"></i></button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="onhover-div mobile-cart">
                                            <div><img src="./images/icon/cart.png"
                                                    class="img-fluid blur-up lazyload" alt=""> <i
                                                    class="ti-shopping-cart"></i></div>
        
                                            <ul class="show-div shopping-cart">
                                            
                                                <li>
                                                    <div class="buttons">


                                                    <a href="cart.php" class="view-cart">view
                                                            cart</a> <a href="#" class="checkout">checkout</a>
                                                            
                                                            </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
