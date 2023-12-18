<?php
error_reporting(0);
?>
<header class="header fixed-top clearfix">

    <div class="brand">
        <a href="dashboard.php" class="logo">
            Donor
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>

    <div class="nav notify-row" id="top_menu">

        <ul class="nav top-menu">

            <?php
        $did=$_SESSION['pgasoid'];       
$ret1=mysqli_query($con,"select tblfoodrequests.id,fullName,requestNumber from tblfoodrequests
 join tblfood  on tblfood.ID=tblfoodrequests.foodId 
 where tblfood.DonorID='$did' and (tblfoodrequests.status is null || tblfoodrequests.status='')");
$num=mysqli_num_rows($ret1);

?>



        </ul>

    </div>
    <div class="top-nav clearfix">

        <ul class="nav pull-right top-menu">


            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <?php
$donorid=$_SESSION['pgasoid'];
$ret=mysqli_query($con,"select FullName from  tbldonor where ID='$donorid'");
$row=mysqli_fetch_array($ret);
$name=$row['FullName'];

?>
                    <img alt="" src="images/2.png">
                    <span class="username"><?php echo $name; ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">

                    <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
                </ul>
            </li>


        </ul>

    </div>
</header>