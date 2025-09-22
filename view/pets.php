<?php
if (isset($_GET['submit'])) {
    $search = strtolower(trim($_GET['search']));

    if ($search === "dog") {
        header("Location: category-dog.php");
        exit();
    } 
    elseif ($search === "cat") {
        header("Location: category-cat.php");
        exit();
    } 
     else {
        header("Location: categories.php");
        exit();
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Pets</title>
    <link rel="stylesheet" href="css/style_user.css" />
    <link rel="icon" href="images/favicon.png" />
</head>

<body>
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

    <!--HTML Pet Search Section Starts here  -->
    <section class="pet-search text-center">
        <div class="container">
        <form action="pets.php" method="get">
            <input type="search" name="search" placeholder="Search for pet..."/>
            <input type="submit" name="submit" value="search" class="btn btn-primary"/>
        </form>

        </div>
    </section>
    <!--HTML Pet Search Section Ends here  -->

    <!--HTML Pet Menu Section Starts here  -->
    <section class="pet-menu">
        <div class="container">
            <h2 class="text-center">Explore Pets</h2>
            <!-- <br> -->
            <!-- pet menu box start here -->
            <div class="pet-menu-box">
                <div class="pet-menu-img">
                    <img src="images/menu-dog-1.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-cat-1.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-bird-1.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-dog-2.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-dog-3.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-bird-2.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-cat-2.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-dog-4.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-cat-3.png" alt="" class="img-curve img-responsive">
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
                    <img src="images/menu-dog-6.png" alt="" class="img-curve img-responsive">
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

    <!--HTML Pet Menu Section Ends here  -->
    <div class="mp-21"></div>
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