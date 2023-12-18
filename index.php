<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Food donation Website</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
</head>

<body>
    <?php include_once("includes/header.php"); ?>
    <div class="banner">
        <div class="container">

            <script src="js/responsiveslides.min.js"></script>
            <script>
                $("#slider3").responsiveSlides({
                auto: true,
                pager: false,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
                });
                });
            </script>

            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-info">
                            <h3>WE NEED YOUR SUPPORT</h3>
                            <p>Wasting food is a common problem in our society. Food waste is crucial since it can
                                improve our environmental and economic sustainability. We have identified the use of web
                                technology to reduce food waste and built an web application that allows restaurants and
                                people to donate and share their leftovers food with people who are in need. This
                                website will enable users to register, login, view items, add items, add items to cart,
                                remove an item from the cart, and log out. This website is using the sql storage and
                                real-time database. Any user in need can see all the food images donated by different
                                users and add it to his or her cart..

                            </p>
                            <a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li>
                        <div class="banner-info">
                            <h3>HELP TURN TEARS TO SURES</h3>
                            <p>Wasting food is a common problem in our society. Food waste is crucial since it can
                                improve our environmental and economic sustainability. We have identified the use of web
                                technology to reduce food waste and built an web application that allows restaurants and
                                people to donate and share their leftovers food with people who are in need. This
                                website will enable users to register, login, view items, add items, add items to cart,
                                remove an item from the cart, and log out. This website is using the sql storage and
                                real-time database. Any user in need can see all the food images donated by different
                                users and add it to his or her cart.

                            </p>
                            <a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="welcome">
        <div class="container">
            <?php

            $ret = mysqli_query($con, "select * from tblpages where PageType='aboutus' ");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

            ?>
                <div class="welcome-head">

                    <p><?php echo $row['PageDescription']; ?></p>
                </div>

        </div><?php } ?>
    </div>


    <div class="clearfix"></div>
    </div>
    </div>
    </div>

    <?php include_once("includes/footer.php"); ?>

    <script type="text/javascript">
        $(document).ready(function() {

            $().UItoTop({
                easingType: 'easeOutQuart'
            });
        });
    </script>
    <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


</body>

</html>