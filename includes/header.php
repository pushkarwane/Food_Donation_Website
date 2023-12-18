<div class="header">
    <div class="container">
        <div class="header-left">
            <span class="menu"><img src="images/loga.jpg" alt="" /></span>
            <ul class="nav1">
                <li><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT US</a></li>
                <li><a href="food-available.php"> AVAILABLE FOOD LIST</a></li>

                <li><a href="contact.php">CONTACT US</a></li>
                <li><a href="donor/login.php">DONOR</a></li>
                <li><a href="admin/login.php">ADMIN</a></li>
                <li><a href="campaign.php">OUR CAMPAIGN</a></li>


            </ul>
            <script>
                $("span.menu").click(function() {
                    $("ul.nav1").slideToggle(300, function() {});
                });
            </script>
        </div>

        <div class="clearfix"></div>
    </div>
</div>