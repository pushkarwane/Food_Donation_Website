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

    <div class="banner page-head">
    </div>

    <div class="about">
        <div class="container">
            <?php

            $ret = mysqli_query($con, "select * from tblpages where PageType='aboutus' ");
            $cnt = 1;
            while ($row = mysqli_fetch_array($ret)) {

            ?>

                <div class="about-info">

                    <div class="about-gds">
                        <div class="col-md-5 about-info-left">
                            <img src="images/20230512_121111.jpg" alt="" />
                        </div>
                        <div class="col-md-7 about-info-right">
                            <h1>Our Campaign</h1>
                            <p>

                                'OUR BATTLE AGAINST HUNGER IS HUMANITY FOR EQUALITY' -
                                A country cannot progress if most of its people are hungry. Today, 14% of our population is
                                undernourished and needs our undivided attention. The only way to ensure a healthy and happy
                                country is by nourishing the ones who need it the most. Sai and Pushkar Food Donation
                                Website is an NGO working with an aim to provide food-relief and nourishment to the
                                underprivileged communities of India.
                                At our site, we exchange ‘Hunger for Hope’.
                                <br>
                                Our donation site in the form of generous donations can help needy to provide nutritious
                                mid-day meals and food-relief to the children,seniors and underprivileged sections of our
                                society.
                                <br>
                                'NO ONE CAN THRIVE ON AN EMPTY STOMACH'-
                                0 44 million people face hunger in the India — including more than 13 million children.
                                Hunger
                                knows no boundaries — it touches every community in the India.
                                'OUR VISION: AN INDIA WITHHOUT HUNGER' -
                                Feeding India is the largest charity working to end hunger in the India. We partner with
                                food banks, food pantries, and local food programs to bring food to people facing hunger. We
                                advocate for policies that create long-term solutions to hunge.
                                <br>

                                'OUR BATTLE AGAINST HUNGER IS HUMANITY FOR EQUALITY' -
                                A country cannot progress if most of its people are hungry. Today, 14% of our population is
                                undernourished and needs our undivided attention. The only way to ensure a healthy and happy
                                country is by nourishing the ones who need it the most. Sai and Pushkar Food Donation
                                Website is an NGO working with an aim to provide food-relief and nourishment to the
                                underprivileged communities of India.
                                At our site, we exchange ‘Hunger for Hope’.
                                <br>
                                Our donation site in the form of generous donations can help needy to provide nutritious
                                mid-day meals and food-relief to the children,seniors and underprivileged sections of our
                                society.
                                'OUR BATTLE AGAINST HUNGER IS HUMANITY FOR EQUALITY' -
                                A country cannot progress if most of its people are hungry. Today, 14% of our population is
                                undernourished and needs our undivided attention. The only way to ensure a healthy and happy
                                country is by nourishing the ones who need it the most. Sai and Pushkar Food Donation
                                Website is an NGO working with an aim to provide food-relief and nourishment to the
                                underprivileged communities of India.
                                At our site, we exchange ‘Hunger for Hope'.



                            </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div><?php } ?>


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