<?php
session_start();
include 'konekdatabase.php';

?>

<!DOCTYPE html>
<html>

<head>
    <title>Maycassie.bee</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Garlic Korean, Maycassie" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //for-mobile-apps -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- //js -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->
</head>

<body>
    <!-- header -->
    <div class="agileits_header">
        <div class="container">
            <div class="w3l_offers">
                <p>SELAMAT DATANG DI MAYCASSIE.BEE !</p>
            </div>
            <div class="product_list_header">
                <a href="cart.php"><button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="logo_products">
        <div class="container">
            <div class="w3ls_logo_products_left1">
                <ul class="phone_email">
                    <li><i class="fa fa-phone" aria-hidden="true"></i>Order Now : (+62) 812 8040 7478</li>
                </ul>
            </div>
            <div class="w3ls_logo_products_left">
                <h1><a href="index.php">MAYCASSIE.BEE</a></h1>
            </div>
            <div class="w3l_search">
                <form action="" method="post">
                    <input type="search" name="Search" placeholder="Cari produk...">
                    <button type="submit" class="btn btn-default search" aria-label="Left Align">
                        <i class="fa fa-search" aria-hidden="true"> </i>
                    </button>
                    <div class="clearfix"></div>
                </form>
            </div>

            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //header -->
    <!-- navigation -->
    <div class="navigation-agileits">
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header nav_2">
                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php" class="act">Home</a></li>
                        <li><a href="order.php">Order Produk</a></li>
                        <li><a href="daftarorder.php">Daftar Order</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <!-- //navigation -->
    <!-- main-slider -->
    <ul id="demo1">
        <li>
            <img src="images/slide1.png" style="height: 450px;" alt="" />
        </li>
        <li>
            <img src="images/slide2.png" style="height: 450px;" alt="" />
        </li>

        <li>
            <img src="images/slide3.png" style="height: 450px;" alt="" />
        </li>
    </ul>
    <!-- //main-slider -->
    <!-- //top-header and slider -->
    <!-- top-brands -->
    <div class="top-brands">
        <div class="container">
            <h2>Produk Kami</h2>
            <div class="grid_3 grid_5">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                            <div class="agile-tp">
                                <h5>Penawaran Untuk Anda</h5>
                            </div>
                            <div class="agile_top_brands_grids">
                                <div class="col-md-12 top_brand_left">
                                    <div class="agile_top_brand">
                                        <img src="images/offer.png" alt=" " class="img-responsive" />
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="col-sm-4 text-center">
                                                    <a><img title=" Korean Garlic Cheese Bread" alt="" src="images/garlic.jpg" width="200px" height="200px"></a>
                                                    <p>Rp.15.000/pcs</p>
                                                    <h4>Korean Garlic Cheese Bread</h4>
                                                    <button type="button" class="btn btn-warning"><a href="order.php">Order Disini</a></button>
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <a><img title="Donut Mayo" alt="" src="images/donut.jpeg" width="200px" height="200px"></a>
                                                    <p>Rp.5.000/pcs</p>
                                                    <h4>Donut Mayo</h4>
                                                    <button type="button" class="btn btn-warning"><a href="order.php">Order Disini</a></button>
                                                </div>
                                                <div class="col-sm-4 text-center">
                                                    <a><img title="Pizza" alt="" src="images/pizza.jpg" width="200px" height="200px"></a>
                                                    <p></p>Rp.8.000/slices</p>
                                                    <h4>Pizza</h4>
                                                    <button type="button" class="btn btn-warning"><a href="order.php">Order Disini</a></button>
                                                </div>
                                            </div>
                                    </div>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>


        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- //top-brands -->





    <!-- //footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-4 w3_footer_grid">
                    <h3>Hubungi Kami</h3>

                    <ul class="address">
                        <li><i href="#" class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Maycassie.bee, Yogyakarta & Klaten</li>
                        <li>
                            <a href="https://www.instagram.com/maycassie.bee/" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i>@maycassie.bee</a>
                        </li>
                        <li>
                            <a href="https://wa.me/6281280407478" class="w3_agile_whatsapp"><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+6281280407478</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="footer-copy">

            <div class="container">
                <p>© 2020 Wulan Ratna Mayangsari</p>
            </div>
        </div>

    </div>
    <div class="footer-botm">
        <div class="container">
            <div class="w3layouts-foot">
                <ul>
                    <li><a href="#" class="w3_agile_instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- top-header and slider -->
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {

            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 4000,
                easingType: 'linear'
            };


            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!-- //here ends scrolling icon -->

    <!-- main slider-banner -->
    <script src="js/skdslider.min.js"></script>
    <link href="css/skdslider.css" rel="stylesheet">
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
    <!-- //main slider-banner -->
</body>

</html>