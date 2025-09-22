<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Categories</title>
    <link rel="stylesheet" href="css/style_user.css">
    <link rel="icon" href="images/favicon.png" />
</head>

<body>
    <!--HTML Navbar Section Starts here  -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <!-- Logo Image -->
                <a href="client/user_page.php"><img src="images/logo.png" alt="Pet Adaptation Navbar Logo" class="img-responsive" /></a>
            </div>
            <div class="menu text-right">
               
                <ul>
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
        <!-- <br> -->
    </section>

    <!--HTML Pet Categories Section Starts here  -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Categories</h2>
            <a href="category-dog.php">
                <div class="box-3">
                    <img src="images/dog.png" alt="dog-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Dog</h3>
                </div>
            </a>
            <a href="category-cat.php">
                <div class="box-3">
                    <img src="images/cat.png" alt="cat-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Cat</h3>
                </div>
            </a>
            <a href="#">
                <div class="box-3">
                    <img src="images/bird.png" alt="bird-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Bird</h3>
                </div>
            </a>
            <a href="#">
                <div class="box-3">
                    <img src="images/fish.png" alt="fish-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Fish</h3>
                </div>
            </a>
            <a href="#">
                <div class="box-3">
                    <img src="images/duck.png" alt="dog-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Duck</h3>
                </div>
            </a>
            <!-- <a href="">
                <div class="box-3">
                    <img src="images/chicken.png" alt="dog-1" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Chicken</h3>
                </div>
            </a> -->
            <a href="#">
                <div class="box-3 ">
                    <img src="images/shrimp.png" alt="shrimp" class="img-responsive img-curve img-bg categories-img" />
                    <h3 class="text-center text-orange">Shrimp</h3>
                </div>
                <!-- clear floating -->
                <div class="clearfix"></div>
        </div>
        </a>
    </section>
    <!--HTML Pet Categories Section Ends here  -->
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
    
</body>

</html>

<?php
        include("footer/footer.php")
     ?>