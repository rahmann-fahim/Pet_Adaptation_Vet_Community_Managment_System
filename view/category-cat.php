<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cat Category</title>
    <link rel="stylesheet" href="css/style_user.css" />
    <link rel="icon" href="images/favicon.png" />
</head>
<!-- <img src="images/logo.png" alt="Pet Adaptation Navbar Logo" class="img-responsive" /> -->
<!--HTML Navbar Section Starts here  -->
<section class="navbar">
    <div class="container">
        <div class="logo">
            <!-- Logo Image -->
            <a href="client/user_page.php"><img src="images/logo.png" alt="Pet Adaptation Navbar Logo"
                    class="img-responsive" /></a>
        </div>
        <div class="menu text-right">
            <!-- Menu Will be displayed Here -->
            <ul type="none">
                <li><a href="client/user_page.php">Home</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="pets.php">Pets</a></li>
                <li><a href="vet-community.php">Vet Community</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<!--HTML Navbar Section Ends here  -->

<!-- HTML category  -->
<section class="pet-search text-center">
    <br>
    <br>
    <br>
</section>

<!--HTML Pet Menu Section Starts here  -->
<section class="pet-menu">
    <div class="container">
        <h2 class="text-center">Pets on <a href="#" class="text-orange text-center">"Cat"</a> Category</h2>
        <!-- <br> -->
        <!-- pet menu box start here -->
        <div class="pet-menu-box">
            <div class="pet-menu-img">
                <img src="images/cat1.png" alt="" class="img-curve img-responsive">
            </div>
            <div class="pet-menu-desc">
                <h4>Pet Title</h4>
                <p class="pet-status">Location</p>
                <p class="pet-desc">Health condition is perfect</p>
                <br>
                <a href="adopt.php" class="btn btn-primary">Adopt</a>
                <!-- basically ends here -->
            </div>
        </div>
        <!-- pet menu box ends here  -->
        <div class="pet-menu-box">
            <div class="pet-menu-img">
                <img src="images/cat2.png" alt="" class="img-curve img-responsive">
            </div>
            <div class="pet-menu-desc">
                <h4>Pet Title</h4>
                <p class="pet-status">Location</p>
                <p class="pet-desc">Health condition is perfect</p>
                <br>
                <a href="adopt.php" class="btn btn-primary">Adopt</a>
                <!-- basically ends here -->
            </div>
        </div>
        <div class="pet-menu-box">
            <div class="pet-menu-img">
                <img src="images/cat3.png" alt="" class="img-curve img-responsive">
            </div>
            <div class="pet-menu-desc">
                <h4>Pet Title</h4>
                <p class="pet-status">Location</p>
                <p class="pet-desc">Health condition is perfect</p>
                <br>
                <a href="adopt.php" class="btn btn-primary">Adopt</a>
                <!-- basically ends here -->
            </div>
        </div>
        <div class="pet-menu-box">
            <div class="pet-menu-img">
                <img src="images/cat4.png" alt="" class="img-curve img-responsive">
            </div>
            <div class="pet-menu-desc">
                <h4>Pet Title</h4>
                <p class="pet-status">Location</p>
                <p class="pet-desc">Health condition is perfect</p>
                <br>
                <a href="adopt.php" class="btn btn-primary">Adopt</a>
                <!-- basically ends here -->
            </div>
        </div>
        <div class="pet-menu-box">
            <div class="pet-menu-img">
                <img src="images/cat5.png" alt="" class="img-curve img-responsive">
            </div>
            <div class="pet-menu-desc">
                <h4>Pet Title</h4>
                <p class="pet-status">Location</p>
                <p class="pet-desc">Health condition is perfect</p>
                <br>
                <a href="adopt.php" class="btn btn-primary">Adopt</a>
                <!-- basically ends here -->
            </div>
        </div>
        <div class="pet-menu-box">
            <div class="pet-menu-img">
                <img src="images/cat6.png" alt="" class="img-curve img-responsive">
            </div>
            <div class="pet-menu-desc">
                <h4>Pet Title</h4>
                <p class="pet-status">Location</p>
                <p class="pet-desc">Health condition is perfect</p>
                <br>
                <a href="adopt.php" class="btn btn-primary">Adopt</a>
                <!-- basically ends here -->
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<div class="mp-21"></div>
<!--HTML Pet Menu Section Ends here  -->
<!-- Social Section Starts Here -->
<section class="social">
    <div class="container text-center">
        <ul type="none">
            <li>
                <a href="#"><img src="images/facebook.png" alt="facebook" class="social-img img-responsive"></a>
            </li>
            <li>
                <a href="#"><img src="images/instagram.png" alt="instagram" class="social-img img-responsive"></a>
            </li>
            <li>
                <a href="#"><img src="images/twitter.png" alt="twitter" class="social-img img-responsive"></a>
            </li>
        </ul>
    </div>
</section>
<!-- Social Section Ends Here -->
<!-- Footer Section Starts Here -->

</body>

</html>
<?php
        include("footer/footer.php")
     ?>