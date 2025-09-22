<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vet Community Help</title>
    <link rel="stylesheet" href="css/style_user.css">
    <link rel="icon" href="images/favicon.png">
</head>

<body>
    <!-- Navbar Section -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="client/user_page.php"><img src="images/logo.png" alt="Pet Adaptation Navbar Logo"
                        class="img-responsive" /></a>
            </div>
            <div class="menu text-right">
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

    <div>
        <h2 class="text-center text-orange">Fill This Form To Chat With A Vet For Free</h2>
    </div>

    <section class="pet-search">
        <div class="container">

            <!-- Display success or error messages -->
            <?php
            if (isset($_SESSION['success'])) {
                echo "<p style='color:green; text-align:center;'>".$_SESSION['success']."</p>";
                unset($_SESSION['success']);
            }
            if (isset($_SESSION['error'])) {
                echo "<p style='color:red; text-align:center;'>".$_SESSION['error']."</p>";
                unset($_SESSION['error']);
            }
            ?>

            <form action="../controller/vetController.php" method="post" class="adopt">
                <fieldset>
                    <legend class="text-center text-orange">User & Pet Details Info</legend>

                    <div class="order-label">Full Name</div>
                    <input type="text" name="full-name" placeholder="E.g. RAHMAN FAHIM" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. +88016xxxxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. example@gmail.com" class="input-responsive" required>

                    <div class="order-label">Pet Type</div>
                    <input type="text" name="pet-type" placeholder="E.g. Dog" class="input-responsive" required>

                    <div class="order-label">Pet Details</div>
                    <textarea name="address" rows="2" placeholder="E.g. Pet Problems, Syndromes, Duration"
                        class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-center">
                </fieldset>
            </form>

        </div>
    </section>

    <!-- Social Section -->
    <section class="social">
        <div class="container text-center">
            <ul type="none">
                <li><a href="#"><img src="images/facebook.png" alt="facebook" class="social-img img-responsive"></a></li>
                <li><a href="#"><img src="images/instagram.png" alt="instagram" class="social-img img-responsive"></a></li>
                <li><a href="#"><img src="images/twitter.png" alt="twitter" class="social-img img-responsive"></a></li>
            </ul>
        </div>
    </section>

</body>

</html>

<?php
include("footer/footer.php");
?>
