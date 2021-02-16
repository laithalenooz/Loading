<?php include ('connection.php'); ?>

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
                                    <li>Multikart Demo Store, Demo store India 345-659</li>
                                    <li>Call Us: 123-456-7898</li>
                                    <li>Email Us: <a href="#">Support@Fiot.com</a></li>
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
                            <div class="footer-link">
                                <div class="footer-title">
                                    <h4>my account</h4>
                                </div>
                                <div class="footer-contant">
                                    <ul>
                                    <?php
                                    // print out categories based on db entered categories
                                    $query  = "SELECT * FROM categories";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_assoc($result)) {
                                    echo
                                    "<li><a href='category-page.php?id={$row['category_id']}'>{$row['name']}</a></li>";
                                    }
                                    ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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

    <!-- Theme js-->
    <script src="./js/script.js"></script>




</body>


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/game.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Dec 2020 13:32:16 GMT -->
</html>