<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['pgasoid']==0)) {
  header('location:logout.php');
  } 
     ?>
<!DOCTYPE html>

<head>
    <title>Food donation Website</title>
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    < <link rel="stylesheet" href="css/bootstrap.min.css">

        <link href="css/style.css" rel='stylesheet' type='text/css' />
        <link href="css/style-responsive.css" rel="stylesheet" />

        <link
            href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
            rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font.css" type="text/css" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="css/morris.css" type="text/css" />

        <link rel="stylesheet" href="css/monthly.css">

        <script src="js/jquery2.0.3.min.js"></script>
        <script src="js/raphael-min.js"></script>
        <script src="js/morris.js"></script>
</head>

<body>
    <section id="container">

        <?php include_once('includes/header.php');?>

        <?php include_once('includes/sidebar.php');?>
        <section id="main-content">
            <section class="wrapper">
                <div class="market-updates">
                    <div class="col-md-4 market-update-gd">
                        <div class="market-update-block clr-block-3">
                            <div class="col-md-4 market-update-right">
                                <i class="icon-food fa-3x"> </i>
                            </div>

                            <?php 
$donarid=$_SESSION['pgasoid'];
					$query=mysqli_query($con,"Select * from  tblfood where DonorID='$donarid'");
$fcounts=mysqli_num_rows($query);
?>
                            <div class="col-md-8 market-update-left">
                                <a href="manage-food-details.php">
                                    <h4>Total Listed Food</h4>
                                </a>
                                <h3><?php echo $fcounts;?></h3>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <?php 
					$query=mysqli_query($con,"select tblfoodrequests.id from tblfoodrequests
 join tblfood  on tblfood.ID=tblfoodrequests.foodId 
 where tblfood.DonorID='$donarid' and (tblfoodrequests.status='Food Take Away/ Request Completed')");
$completed=mysqli_num_rows($query);
?>


                    <?php 
					$query=mysqli_query($con,"select tblfoodrequests.id from tblfoodrequests
 join tblfood  on tblfood.ID=tblfoodrequests.foodId 
 where tblfood.DonorID='$donarid' and (tblfoodrequests.status='Request Rejected')");
$rejected=mysqli_num_rows($query);
?>


                    <?php 
					$query=mysqli_query($con,"select tblfoodrequests.id from tblfoodrequests
 join tblfood  on tblfood.ID=tblfoodrequests.foodId 
 where tblfood.DonorID='$donarid' ");
$allrequests=mysqli_num_rows($query);
?>


                    <?php 
					$query=mysqli_query($con,"select tblfoodrequests.id from tblfoodrequests
 join tblfood  on tblfood.ID=tblfoodrequests.foodId 
 where tblfood.DonorID='$donarid' and (tblfoodrequests.status is null || tblfoodrequests.status='')");
$newrequest=mysqli_num_rows($query);
?>





                    <div class="clearfix"> </div>
                </div>




            </section>
            <?php include_once('includes/footer.php');?>
        </section>
    </section>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/jquery.nicescroll.js"></script>
    <script src="js/jquery.scrollTo.js"></script>
    <script>
    $(document).ready(function() {
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });


        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth: true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity: 0.85,
            data: [{
                    period: '2015 Q1',
                    iphone: 2668,
                    ipad: null,
                    itouch: 2649
                },
                {
                    period: '2015 Q2',
                    iphone: 15780,
                    ipad: 13799,
                    itouch: 12051
                },
                {
                    period: '2015 Q3',
                    iphone: 12920,
                    ipad: 10975,
                    itouch: 9910
                },
                {
                    period: '2015 Q4',
                    iphone: 8770,
                    ipad: 6600,
                    itouch: 6695
                },
                {
                    period: '2016 Q1',
                    iphone: 10820,
                    ipad: 10924,
                    itouch: 12300
                },
                {
                    period: '2016 Q2',
                    iphone: 9680,
                    ipad: 9010,
                    itouch: 7891
                },
                {
                    period: '2016 Q3',
                    iphone: 4830,
                    ipad: 3805,
                    itouch: 1598
                },
                {
                    period: '2016 Q4',
                    iphone: 15083,
                    ipad: 8977,
                    itouch: 5185
                },
                {
                    period: '2017 Q1',
                    iphone: 10697,
                    ipad: 4470,
                    itouch: 2038
                },

            ],
            lineColors: ['#eb6f6f', '#926383', '#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
    </script>
    <script type="text/javascript" src="js/monthly.js"></script>
    <script type="text/javascript">
    $(window).load(function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch (window.location.protocol) {
            case 'http:':
            case 'https:':
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
    </script>
</body>

</html>