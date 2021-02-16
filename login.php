<?php include_once ('inc/connection.php');
session_start();
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
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
                                                                    <form>
                                                                        <div class="form-group"><input type="text"
                                                                                class="form-control"
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
                                                    <div class="buttons"><a href="cart.php" class="view-cart">view
                                                            cart</a> <a href="#" class="checkout">checkout</a></div>
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

<body>
    <!--section start-->
    <section class="login-page section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Login</h3>
                    <?php if(isset($error)){echo "<div class = 'alert alert-danger'>$error</div>";} ?>
                    <div class="theme-card">
                        <form class="theme-form" method="post" action="login_validation.php">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="review">Password</label>
                                <input type="password" name="password" class="form-control" id="review"
                                    placeholder="Enter your password">
                            </div>
                            <button type="submit" name="submit" class="btn btn-solid">Login</button>
                            <a type="submit" name="register" class="btn btn-solid" href="register.php">Register</a>
                        </form>
                         
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section ends-->





    <!-- footer -->
    <footer class="bg-img-gym overlay-cls effect-cls footer-effect">
        <img src="./images/parallax/27.jpg" alt="" class="bg-img blur-up lazyload">
        <div class="dark-layout">
            <div class="container">
                <section class="section-b-space border-b">
                    <div class="row footer-theme2">
                        <div class="col-lg-3">
                            <div class="footer-title footer-mobile-title">
                                <h4>about</h4>
                            </div>
                            <div class="footer-contant">
                                <div class="footer-logo">
                                    <img src="./images/icon/logo4.png" alt="">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et.Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                            </div>
                        </div>
                        <div class="col-lg-6 subscribe-wrapper">
                            <div class="subscribe-block">
                                <h2>newsletter</h2>
                                <form>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleFormControlInput3"
                                            placeholder="Enter your email">
                                        <button type="submit" class="btn btn-solid ">subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-title">
                                <h4>store information</h4>
                            </div>
                            <div class="footer-contant">
                                <ul class="contact-details">
                                    <li>Loading store Jordan</li>
                                    <li>Call Us: 078-785-2510</li>
                                    <li>Email Us: <a href="#">infi@Loading.com</a></li>
                                    <li>Fax: 123456</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="dark-layout">
            <div class="container">
                <section class="small-section">
                    <div class="row footer-theme2">
                        <div class="col p-set">
                            <div class="footer-link-b">
                                <div class="footer-title">
                                    <h4>why we choose</h4>
                                </div>
                                <div class="footer-contant">
                                    <ul>
                                        <li><a href="#">shipping & return</a></li>
                                        <li><a href="#">secure shopping</a></li>
                                        <li><a href="#">gallary</a></li>
                                        <li><a href="#">affiliates</a></li>
                                        <li><a href="#">contacts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="sub-footer darker-subfooter">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="footer-end">
                            <p><i class="fa fa-copyright" aria-hidden="true"></i> 2020-powered by
                                Loading</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-sm-12">
                        <div class="payment-card-bottom">
                            <ul>
                                <li>
                                    <a href="#"><img src="./images/icon/visa.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="./images/icon/mastercard.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="./images/icon/paypal.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="./images/icon/american-express.png" alt=""></a>
                                </li>
                                <li>
                                    <a href="#"><img src="./images/icon/discover.png" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->


    <!-- tap to top -->
    <div class="tap-top">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->


    <!-- latest jquery-->
    <script src="./js/jquery-3.3.1.min.js"></script>

    <!-- fly cart ui jquery-->
    <script src="./js/jquery-ui.min.js"></script>

    <!-- popper js-->
    <script src="./js/popper.min.js"></script>

    <!-- slick js-->
    <script src="./js/slick.js"></script>

    <!-- menu js-->
    <script src="./js/menu.js"></script>

    <!-- lazyload js-->
    <script src="./js/lazysizes.min.js"></script>

    <!-- Bootstrap js-->
    <script src="./js/bootstrap.js"></script>

    <!-- Bootstrap Notification js-->
    <script src="./js/bootstrap-notify.min.js"></script>

    <!-- Fly cart js-->
    <script src="./js/fly-cart.js"></script>

    <!-- Timer js-->
    <script src="./js/timer.js"></script>

    <!-- Theme js-->
    <script src="./js/script.js"></script>


</body>


</html>