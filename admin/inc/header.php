<?php 
// Confirm Session To Enter Other Pages
include('inc/connection.php');

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/back-end/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 14:10:42 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="./images/dashboard/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="./images/dashboard/favicon.png" type="image/x-icon">
    <title>Loading Dashboard</title>

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="../css/flag-icon.css">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="../css/icofont.css">

    <!-- Prism css-->
    <link rel="stylesheet" type="text/css" href="../css/prism.css">

    <!-- Chartist css -->
    <link rel="stylesheet" type="text/css" href="../css/chartist.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="../css/admin.css">
</head>

<body>

<!-- page-wrapper Start-->
<div class="page-wrapper">

    <!-- Page Header Start-->
    <div class="page-main-header">
        <div class="main-header-right row">
            <div class="main-header-left d-lg-none">
                <div class="logo-wrapper"><a href="index.php"><img class="blur-up lazyloaded" src="./images/dashboard/loading-logo2.png" alt=""></a></div>

            </div>
            <div class="mobile-sidebar">
                <div class="media-body text-right switch-sm">
                    <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Ends -->

    <!-- Page Body Start-->
    <div class="page-body-wrapper">

        <!-- Page Sidebar Start-->
        <div class="page-sidebar">
            <div class="main-header-left d-none d-lg-block">
                <div class="logo-wrapper"><a href="index.php"><img class="blur-up lazyloaded" src="./images/dashboard/loading-logo2.png" alt=""></a></div>
            </div>
            <div class="sidebar custom-scrollbar">
                <div class="sidebar-user text-center">
                    <div><img class="img-60 rounded-circle lazyloaded blur-up" src="./images/dashboard/man.png" alt="#">
                    </div>
                    <h6 class="mt-3 f-14"><?php
                                            if(isset($_SESSION['superadmin'])){
                                                echo $_SESSION['superadmin']; 
                                            } elseif(isset($_SESSION['admin'])){
                                                echo $_SESSION['admin']; 
                                            }
                                            
                                            ?></h6>
                </div>
                <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="index.php"><i data-feather="home"></i><span>Dashboard</span></a></li>
                    <?php
                        
                        if (isset($_SESSION['superadmin'])) {
                            ?>

                            <?php  echo "<li>";
                            echo "<a class='sidebar-header' href='#'><i data-feather='user-plus'>";
                            echo "</i><span>Admins</span></a>";
                            echo "<ul class='sidebar-submenu'>";
                            echo "<li><a href='../admin/admin_list.php'>Admins List</a></li>";
                            echo "<li><a href='../admin/create_admin.php'>Create Admin</a></li>";
                            echo "</ul>";
                            echo "</li>";
                            ?>
                            <?php
                        } elseif (isset($_SESSION['admin'])) {
                            
                        }
                        ?>
                        
                    </li>

                    <li><a class="sidebar-header" href="#"><i data-feather="user-plus"></i><span>Users</span></a>

                        <ul class="sidebar-submenu">
                            <li><a href="user-list.php">User List</a></li>
                            <li><a href="create-user.php">Create User</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="contact_us.php"><i data-feather="archive"></i><span>Messages</span></a>
                    </li>
                       
                    <li><a class="sidebar-header" href="#"><i data-feather="tag"></i><span>Category</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="manage_category.php">Category List</a></li>
                            <li><a href="create_category.php">Create Category</a></li>
                        </ul>
                    </li>

                    
                    <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Product</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="admin_prudact_list.php">Product List</a></li>
                            <li><a href="admin_create_product.php">Create Product</a></li>
                        </ul>
                    </li>

                    <li><a class="sidebar-header" href="#"><i data-feather="clipboard"></i><span>Orders</span></a>
                        <ul class="sidebar-submenu">
                            <li><a href="order.php">Orders List</a></li>
                          <!--  <li><a href="page-create.php">Create Orders</a></li> -->
                        </ul>
                    </li>
                    <li><a class="sidebar-header" href="inc/logout.php"><i data-feather="log-out"></i><span>Logout</span></a>
                    </li>

                </ul>
            </div>
        </div>
        <!-- Page Sidebar Ends-->

        <!-- Right sidebar Start-->
        <div class="right-sidebar" id="right_side_bar">
            <div>
                <div class="container p-0">
                    <div class="modal-header p-l-20 p-r-20">
                        <div class="col-sm-8 p-0">
                            <h6 class="modal-title font-weight-bold">FRIEND LIST</h6>
                        </div>
                        <div class="col-sm-4 text-right p-0"><i class="mr-2" data-feather="settings"></i></div>
                    </div>
                </div>
                <div class="friend-list-search mt-0">
                    <input type="text" placeholder="search friend"><i class="fa fa-search"></i>
                </div>
                <div class="p-l-30 p-r-30">
                    <div class="chat-box">
                        <div class="people-list friend-list">
                            <ul class="list">
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user.png" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Vincent Porter</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user1.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Ain Chavez</div>
                                        <div class="status"> 28 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user2.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Kori Thomas</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user3.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Erica Hughes</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/man.png" alt="">
                                    <div class="status-circle offline"></div>
                                    <div class="about">
                                        <div class="name">Ginger Johnston</div>
                                        <div class="status"> 2 minutes ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/user5.jpg" alt="">
                                    <div class="status-circle away"></div>
                                    <div class="about">
                                        <div class="name">Prasanth Anand</div>
                                        <div class="status"> 2 hour ago</div>
                                    </div>
                                </li>
                                <li class="clearfix"><img class="rounded-circle user-image" src="./images/dashboard/designer.jpg" alt="">
                                    <div class="status-circle online"></div>
                                    <div class="about">
                                        <div class="name">Hileri Jecno</div>
                                        <div class="status"> Online</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Right sidebar Ends-->