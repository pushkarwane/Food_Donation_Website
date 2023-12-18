<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>

<header class="header fixed-top clearfix">
    <div class="brand">
        <a href="dashboard.php" class="logo">
            Hello Sai
        </a>
        <div class="sidebar-toggle-box">
            <div class="fa fa-bars"></div>
        </div>
    </div>

    <div class="top-nav clearfix">
        <ul class="nav pull-right top-menu">

            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <?php
                    $adid = $_SESSION['pgasaid'];
                    $ret = mysqli_query($con, "select AdminName from tbladmin where ID='$adid'");
                    $row = mysqli_fetch_array($ret);
                    $name = $row['AdminName'];

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